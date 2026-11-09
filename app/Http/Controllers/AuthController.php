<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Tampilkan formulir login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Tangani permintaan autentikasi login.
     */
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'role' => ['required', 'string', 'in:siswa,guru,admin'],
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');
        $username = $credentials['username'];
        $password = $credentials['password'];

        // Coba login berdasarkan email atau username jika field didukung
        $attemptEmail = Auth::attempt(['email' => $username, 'password' => $password], $remember);
        $attemptUsername = false;

        if (! $attemptEmail) {
            $attemptUsername = Auth::attempt(['name' => $username, 'password' => $password], $remember);
        }

        if ($attemptEmail || $attemptUsername) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('status', 'Berhasil masuk ke dalam sistem.');
        }

        throw ValidationException::withMessages([
            'username' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ]);
    }

    /**
     * Tangani permintaan keluar (logout).
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Anda telah berhasil keluar.');
    }
}
