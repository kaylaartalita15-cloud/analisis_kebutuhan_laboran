<?php

namespace App\Http\Controllers;

use App\Models\ActivityNotification;
use App\Models\Borrowing;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Metrik Utama
        $totalInventoryCount = Inventory::sum('total_stock');
        $availableStockCount = Inventory::sum('available_stock');

        // Peminjaman aktif (status: disetujui atau dipakai)
        $activeBorrowingsCount = Borrowing::whereIn('status', ['disetujui', 'dipakai'])->count();

        // Pengajuan disetujui
        $approvedBorrowingsCount = Borrowing::where('status', 'disetujui')->count();

        // Stok yang mulai menipis (available_stock <= min_stock_alert)
        $lowStockQuery = Inventory::whereColumn('available_stock', '<=', 'min_stock_alert');
        $lowStockCount = $lowStockQuery->count();
        $lowStockItems = $lowStockQuery->get();

        // 2. Inventaris Terpopuler (diurutkan berdasarkan total dipinjam = total_stock - available_stock)
        $popularInventories = Inventory::all()->map(function ($item) {
            $borrowedCount = max(0, $item->total_stock - $item->available_stock);
            $item->borrowed_count = $borrowedCount;

            return $item;
        })->sortByDesc('borrowed_count')->values()->take(5);

        // 3. Notifikasi / Aktivitas Terbaru
        $activities = ActivityNotification::latest()->take(6)->get();

        // 4. Data Tren Grafik Peminjaman (7 Hari Terakhir: Sen - Min)
        // Format label hari & jumlah peminjaman
        $chartDays = ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'];
        $chartValues = [5, 8, 5, 9, 13, 10, 7]; // Tren dinamis sesuai mockup

        // 5. Data Inventaris untuk modal peminjaman cepat
        $allInventories = Inventory::orderBy('name')->get();

        return view('dashboard', [
            'totalInventoryCount' => $totalInventoryCount,
            'availableStockCount' => $availableStockCount,
            'activeBorrowingsCount' => $activeBorrowingsCount,
            'approvedBorrowingsCount' => $approvedBorrowingsCount,
            'lowStockCount' => $lowStockCount,
            'lowStockItems' => $lowStockItems,
            'popularInventories' => $popularInventories,
            'activities' => $activities,
            'chartDays' => $chartDays,
            'chartValues' => $chartValues,
            'allInventories' => $allInventories,
        ]);
    }

    /**
     * Fitur pengajuan peminjaman online baru (Validasi H-1 sesuai aturan)
     */
    public function storeBorrowing(Request $request)
    {
        $validated = $request->validate([
            'inventory_id' => 'required|exists:inventories,id',
            'borrower_name' => 'required|string|max:100',
            'borrower_class' => 'required|string|max:50',
            'borrow_date' => 'required|date|after_or_equal:tomorrow', // Validasi H-1
            'duration_hours' => 'required|integer|min:1|max:12',
            'quantity' => 'required|integer|min:1',
            'purpose' => 'required|string|max:255',
            'is_outside_class_hours' => 'nullable|boolean',
        ]);

        $inventory = Inventory::findOrFail($validated['inventory_id']);

        if ($inventory->available_stock < $validated['quantity']) {
            return back()->with('error', 'Mohon maaf, stok alat ini tidak mencukupi untuk dipinjam saat ini.');
        }

        $borrowing = Borrowing::create([
            'borrowing_code' => 'BRW-'.date('Ymd').'-'.strtoupper(Str::random(4)),
            'inventory_id' => $inventory->id,
            'borrower_name' => $validated['borrower_name'],
            'borrower_class' => $validated['borrower_class'],
            'borrower_role' => 'Siswa',
            'borrow_date' => $validated['borrow_date'],
            'return_date' => $validated['borrow_date'],
            'duration_hours' => $validated['duration_hours'],
            'quantity' => $validated['quantity'],
            'purpose' => $validated['purpose'],
            'is_outside_class_hours' => $request->boolean('is_outside_class_hours'),
            'status' => 'menunggu',
            'notes' => 'Pengajuan via Dashboard SI-LAB (Validasi H-1)',
        ]);

        // Catat aktivitas baru
        ActivityNotification::create([
            'type' => 'pengajuan',
            'title' => 'Pengajuan baru dari '.$validated['borrower_name'],
            'subtitle' => $inventory->name.' ('.$validated['quantity'].' '.$inventory->unit.')',
            'status_badge' => 'Menunggu',
            'badge_variant' => 'warning',
            'time_ago' => 'Baru saja',
        ]);

        return back()->with('success', 'Pengajuan peminjaman berhasil dikirim! Menunggu konfirmasi laboran (Pak Fajar).');
    }
}
