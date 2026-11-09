@extends('layouts.app')

@section('content')
<div class="min-h-screen relative overflow-hidden flex items-center justify-center p-4 sm:p-6 lg:p-8">
    <!-- Ambient Pastel Background Gradients -->
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-blue-100/60 blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/4 -right-24 w-96 h-96 rounded-full bg-purple-100/70 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-20 w-96 h-96 rounded-full bg-amber-100/50 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 right-1/4 w-80 h-80 rounded-full bg-indigo-100/50 blur-3xl pointer-events-none"></div>

    <!-- Decorative Vector Sparkles in Background (No Emoji) -->
    <div class="absolute top-12 left-1/4 text-amber-300 pointer-events-none opacity-80 hidden md:block">
        <svg class="w-6 h-6 animate-pulse-subtle" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z"/>
        </svg>
    </div>
    <div class="absolute top-28 right-1/4 text-indigo-300 pointer-events-none opacity-70 hidden md:block">
        <svg class="w-4 h-4 animate-pulse-subtle" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z"/>
        </svg>
    </div>
    <div class="absolute bottom-16 right-16 text-purple-300 pointer-events-none opacity-75 hidden md:block">
        <svg class="w-5 h-5 animate-pulse-subtle" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z"/>
        </svg>
    </div>

    <!-- Main Card Container -->
    <div class="relative w-full max-w-4xl bg-white rounded-3xl sm:rounded-[32px] shadow-[0_20px_60px_-15px_rgba(90,82,165,0.12)] border border-slate-100/80 overflow-hidden z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[580px]">
            
            <!-- Left Column: Computer Laboratory Illustration & Brand -->
            <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col items-center justify-center text-center bg-gradient-to-b from-white via-[#F8FAFF] to-[#F2F5FE] border-b lg:border-b-0 lg:border-r border-slate-100 relative">
                
                <!-- Soft Glow Behind Computer Setup -->
                <div class="absolute w-56 h-56 rounded-full bg-gradient-to-tr from-blue-100/70 via-indigo-100/50 to-purple-100/60 blur-xl pointer-events-none"></div>

                <!-- Computer Lab Vector Illustration (Clean, Pastel, No Emoji) -->
                <div class="relative z-10 w-52 h-48 flex items-center justify-center animate-float-slow">
                    <svg viewBox="0 0 240 220" class="w-full h-full drop-shadow-md overflow-visible" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Glow Circle -->
                        <circle cx="120" cy="115" r="78" fill="#EEF4FF" />
                        <circle cx="120" cy="115" r="62" fill="#E8EFFE" />

                        <!-- Digital Data Orbit 1 (Tilted Left) -->
                        <ellipse cx="120" cy="115" rx="86" ry="28" transform="rotate(-26 120 115)" stroke="#C7D7FE" stroke-width="2" stroke-dasharray="4 2" />
                        <!-- Network Data Node 1 -->
                        <circle cx="54" cy="82" r="4.5" fill="#5A52A5" />
                        <circle cx="186" cy="148" r="4.5" fill="#3B82F6" />

                        <!-- Digital Data Orbit 2 (Tilted Right) -->
                        <ellipse cx="120" cy="115" rx="86" ry="28" transform="rotate(32 120 115)" stroke="#D8D4FD" stroke-width="2" stroke-dasharray="4 2" />
                        <!-- Network Data Node 2 -->
                        <circle cx="182" cy="80" r="4" fill="#818CF8" />
                        <circle cx="58" cy="150" r="4" fill="#F472B6" />

                        <!-- Tech Sparkles in Illustration -->
                        <path d="M192 42L194.5 50.5L203 53L194.5 55.5L192 64L189.5 55.5L181 53L189.5 50.5L192 42Z" fill="#FBBF24" />
                        <path d="M40 96L41.8 102.2L48 104L41.8 105.8L40 112L38.2 105.8L32 104L38.2 102.2L40 96Z" fill="#A5B4FC" />
                        <path d="M120 18L121.5 23.5L127 25L121.5 26.5L120 32L118.5 26.5L113 25L118.5 23.5L120 18Z" fill="#FBBF24" />

                        <!-- Left Companion: Microchip / CPU Processor (Pink Accent) -->
                        <g id="microchip" transform="translate(42, 126)">
                            <rect x="2" y="2" width="28" height="28" rx="7" fill="url(#chipGradient)" stroke="#F472B6" stroke-width="2" />
                            <!-- Chip Pins -->
                            <line x1="8" y1="0" x2="8" y2="2" stroke="#F472B6" stroke-width="2" stroke-linecap="round" />
                            <line x1="16" y1="0" x2="16" y2="2" stroke="#F472B6" stroke-width="2" stroke-linecap="round" />
                            <line x1="24" y1="0" x2="24" y2="2" stroke="#F472B6" stroke-width="2" stroke-linecap="round" />
                            <line x1="8" y1="30" x2="8" y2="32" stroke="#F472B6" stroke-width="2" stroke-linecap="round" />
                            <line x1="16" y1="30" x2="16" y2="32" stroke="#F472B6" stroke-width="2" stroke-linecap="round" />
                            <line x1="24" y1="30" x2="24" y2="32" stroke="#F472B6" stroke-width="2" stroke-linecap="round" />
                            <!-- Chip Center Core -->
                            <rect x="9" y="9" width="14" height="14" rx="3.5" fill="#FFFFFF" fill-opacity="0.85" />
                            <path d="M13 16L16 13L19 16" stroke="#FB7185" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>

                        <!-- Right Companion: Computer Lab Server / CPU Tower (Cyan Accent) -->
                        <g id="server-tower" transform="translate(166, 122)">
                            <rect x="0" y="0" width="22" height="42" rx="5" fill="#FFFFFF" stroke="#38BDF8" stroke-width="2" />
                            <!-- Drive Bays -->
                            <rect x="3.5" y="6" width="15" height="3" rx="1.5" fill="#E0F2FE" />
                            <rect x="3.5" y="12" width="15" height="3" rx="1.5" fill="#E0F2FE" />
                            <rect x="3.5" y="18" width="15" height="3" rx="1.5" fill="#E0F2FE" />
                            <!-- Status Indicator LEDs -->
                            <circle cx="6" cy="28" r="1.5" fill="#38BDF8" />
                            <circle cx="11" cy="28" r="1.5" fill="#34D399" />
                            <!-- Power Switch -->
                            <circle cx="11" cy="34" r="2" fill="#5A52A5" />
                        </g>

                        <!-- Centerpiece: Desktop PC Computer Lab Setup -->
                        <g id="desktop-computer">
                            <!-- Stand Base -->
                            <ellipse cx="120" cy="174" rx="22" ry="5" fill="#CBD5E1" />
                            <path d="M116 148H124V172H116V148Z" fill="#94A3B8" />

                            <!-- Monitor Outer Bezel -->
                            <rect x="74" y="66" width="92" height="66" rx="8" fill="#FFFFFF" stroke="#5A52A5" stroke-width="2.5" />
                            
                            <!-- Monitor Inner Display -->
                            <rect x="78" y="70" width="84" height="54" rx="5" fill="url(#screenGradient)" />

                            <!-- Screen Header Window Control Dots -->
                            <circle cx="84" cy="76" r="1.75" fill="#F87171" />
                            <circle cx="89" cy="76" r="1.75" fill="#FBBF24" />
                            <circle cx="94" cy="76" r="1.75" fill="#34D399" />
                            <line x1="102" y1="76" x2="156" y2="76" stroke="#E2E8F0" stroke-width="1.5" stroke-linecap="round" />

                            <!-- Terminal / Code Icon < / > -->
                            <path d="M107 94L99 99L107 104" stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M133 94L141 99L133 104" stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="123" y1="92" x2="117" y2="106" stroke="#818CF8" stroke-width="2" stroke-linecap="round" />

                            <!-- Syntax / Data Lines on Screen -->
                            <rect x="94" y="111" width="22" height="3" rx="1.5" fill="#93C5FD" fill-opacity="0.8" />
                            <rect x="120" y="111" width="26" height="3" rx="1.5" fill="#C7D2FE" fill-opacity="0.8" />

                            <!-- Keyboard on Desk -->
                            <g id="keyboard" transform="translate(86, 160)">
                                <rect x="0" y="0" width="52" height="15" rx="3.5" fill="#FFFFFF" stroke="#94A3B8" stroke-width="1.5" />
                                <line x1="4" y1="4" x2="48" y2="4" stroke="#E2E8F0" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="2 1.5" />
                                <line x1="4" y1="7.5" x2="48" y2="7.5" stroke="#E2E8F0" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="2 1.5" />
                                <rect x="16" y="10.5" width="20" height="2.5" rx="1" fill="#CBD5E1" />
                            </g>

                            <!-- Optical Mouse on Desk -->
                            <g id="mouse" transform="translate(144, 161)">
                                <rect x="0" y="0" width="9" height="13" rx="4.5" fill="#FFFFFF" stroke="#94A3B8" stroke-width="1.5" />
                                <line x1="4.5" y1="2" x2="4.5" y2="5" stroke="#5A52A5" stroke-width="1.2" stroke-linecap="round" />
                            </g>
                        </g>

                        <!-- SVG Gradients -->
                        <defs>
                            <linearGradient id="screenGradient" x1="120" y1="70" x2="120" y2="124" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#EFF6FF" />
                                <stop offset="100%" stop-color="#DBEAFE" />
                            </linearGradient>
                            <linearGradient id="chipGradient" x1="2" y1="2" x2="30" y2="30" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#FDF2F8" />
                                <stop offset="100%" stop-color="#FCE7F3" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Branding Typography: Laboratorium Komputer -->
                <div class="mt-5 text-center">
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-[#25204B] tracking-tight">
                        SI-LAB
                    </h1>
                    <p class="text-sm sm:text-base text-slate-500 font-medium leading-relaxed mt-2 max-w-[260px] mx-auto">
                        Sistem Informasi<br>
                        Peminjaman &amp; Inventaris<br>
                        Laboratorium Komputer
                    </p>
                </div>
            </div>

            <!-- Right Column: Login Card & Form -->
            <div class="lg:col-span-7 p-8 sm:p-12 flex flex-col justify-center bg-white">
                
                <!-- Card Header -->
                <div class="mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#25204B] tracking-tight">
                        Selamat Datang!
                    </h2>
                    <p class="text-sm text-slate-400 mt-1.5 font-normal">
                        Masuk ke akun Anda untuk melanjutkan
                    </p>
                </div>

                <!-- Role Selector Tabs (Siswa, Guru, Admin) -->
                <div class="bg-[#F1F3F9] p-1.5 rounded-2xl flex items-center justify-between mb-6 gap-1" role="tablist">
                    <button type="button" 
                            id="tab-siswa" 
                            onclick="selectRole('siswa')"
                            class="role-tab flex-1 py-2 px-3 text-sm font-semibold rounded-xl transition-all duration-200 text-center bg-[#5A52A5] text-white shadow-sm cursor-pointer"
                            role="tab" 
                            aria-selected="true">
                        Siswa
                    </button>
                    <button type="button" 
                            id="tab-guru" 
                            onclick="selectRole('guru')"
                            class="role-tab flex-1 py-2 px-3 text-sm font-medium rounded-xl transition-all duration-200 text-center text-slate-600 hover:text-[#5A52A5] hover:bg-white/60 cursor-pointer"
                            role="tab" 
                            aria-selected="false">
                        Guru
                    </button>
                    <button type="button" 
                            id="tab-admin" 
                            onclick="selectRole('admin')"
                            class="role-tab flex-1 py-2 px-3 text-sm font-medium rounded-xl transition-all duration-200 text-center text-slate-600 hover:text-[#5A52A5] hover:bg-white/60 cursor-pointer"
                            role="tab" 
                            aria-selected="false">
                        Admin
                    </button>
                </div>

                <!-- Flash Status Alert (if any) -->
                @if (session('status'))
                    <div class="mb-5 p-3.5 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm rounded-xl flex items-center gap-2.5">
                        <svg class="w-5 h-5 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Hidden Role Input -->
                    <input type="hidden" name="role" id="role-input" value="{{ old('role', 'siswa') }}">

                    <!-- Username / NIS / NIP / Email Input -->
                    <div>
                        <label for="username" id="username-label" class="sr-only">Username / NIS</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <!-- User Icon (No Emoji) -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" 
                                   name="username" 
                                   id="username" 
                                   value="{{ old('username') }}" 
                                   required 
                                   autofocus
                                   placeholder="Username / NIS" 
                                   class="w-full bg-[#F8FAFD] border @error('username') border-rose-300 ring-2 ring-rose-100 @else border-slate-200 @enderror text-slate-800 placeholder-slate-400 text-sm rounded-xl pl-11 pr-4 py-3.5 focus:outline-none focus:border-[#5A52A5] focus:bg-white focus:ring-4 focus:ring-[#5A52A5]/15 transition-all duration-200">
                        </div>
                        @error('username')
                            <p class="mt-1.5 text-xs text-rose-500 font-medium pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input with Toggle Visibility -->
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <!-- Lock Icon (No Emoji) -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" 
                                   name="password" 
                                   id="password" 
                                   required
                                   placeholder="Password" 
                                   class="w-full bg-[#F8FAFD] border @error('password') border-rose-300 ring-2 ring-rose-100 @else border-slate-200 @enderror text-slate-800 placeholder-slate-400 text-sm rounded-xl pl-11 pr-11 py-3.5 focus:outline-none focus:border-[#5A52A5] focus:bg-white focus:ring-4 focus:ring-[#5A52A5]/15 transition-all duration-200">
                            
                            <!-- Toggle Password Visibility Button -->
                            <button type="button" 
                                    id="toggle-password" 
                                    onclick="togglePasswordVisibility()" 
                                    class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none transition-colors cursor-pointer"
                                    aria-label="Tampilkan atau sembunyikan kata sandi">
                                <!-- Eye Icon (Show) -->
                                <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Eye Slash Icon (Hide) -->
                                <svg id="eye-slash-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1.5 text-xs text-rose-500 font-medium pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-1 text-sm">
                        <label class="inline-flex items-center cursor-pointer select-none">
                            <input type="checkbox" 
                                   name="remember" 
                                   id="remember" 
                                   class="w-4 h-4 rounded border-slate-300 text-[#5A52A5] focus:ring-[#5A52A5]/30 focus:ring-offset-0 cursor-pointer">
                            <span class="ml-2 text-slate-600 text-sm">Ingat saya</span>
                        </label>
                        <button type="button" 
                                onclick="openModal('forgotModal')" 
                                class="text-sm font-medium text-[#5A52A5] hover:text-[#463F8A] hover:underline focus:outline-none cursor-pointer">
                            Lupa password?
                        </button>
                    </div>

                    <!-- Submit Button "Masuk" -->
                    <div class="pt-2">
                        <button type="submit" 
                                class="w-full bg-[#5A52A5] hover:bg-[#4D4592] active:bg-[#3F377A] text-white font-semibold py-3.5 px-4 rounded-xl shadow-md shadow-indigo-200/50 hover:shadow-lg hover:shadow-indigo-300/50 transition-all duration-200 flex items-center justify-center cursor-pointer">
                            Masuk
                        </button>
                    </div>

                    <!-- Footer Link: Hubungi Admin -->
                    <div class="text-center pt-3">
                        <p class="text-sm text-slate-500">
                            Belum punya akun? 
                            <button type="button" 
                                    onclick="openModal('contactAdminModal')" 
                                    class="font-semibold text-[#5A52A5] hover:text-[#463F8A] hover:underline focus:outline-none cursor-pointer">
                                Hubungi admin
                            </button>
                        </p>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!-- Modal: Hubungi Admin (Informasi Layanan Admin Lab Komputer, No Emoji) -->
<div id="contactAdminModal" class="fixed inset-0 z-50 hidden bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-md rounded-2xl p-6 shadow-xl border border-slate-100 transform transition-all">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-[#5A52A5] flex items-center justify-center">
                    <!-- Computer Monitor SVG Icon (No Emoji) -->
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-[#25204B]">Informasi Layanan Lab Komputer</h3>
            </div>
            <button type="button" onclick="closeModal('contactAdminModal')" class="text-slate-400 hover:text-slate-600 cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-4 space-y-3 text-sm text-slate-600">
            <p>Untuk pendaftaran akun baru siswa atau guru laboratorium komputer (akses PC, laptop, proyektor, dan periferal), silakan hubungi tim pengelola lab:</p>
            <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-100 space-y-2 text-xs sm:text-sm">
                <div class="flex justify-between">
                    <span class="text-slate-400 font-medium">Ruang:</span>
                    <span class="text-slate-700 font-semibold">Laboratorium Komputer &amp; Multimedia</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-400 font-medium">Jam Kerja:</span>
                    <span class="text-slate-700 font-semibold">Senin - Jumat (07.30 - 15.30 WIB)</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-400 font-medium">Surel:</span>
                    <span class="text-slate-700 font-semibold">labkom@sekolah.sch.id</span>
                </div>
            </div>
            <p class="text-xs text-slate-400 pt-1">Siswa juga dapat melapor melalui guru mata pelajaran informatika / ketua kelas.</p>
        </div>
        <div class="mt-5">
            <button type="button" onclick="closeModal('contactAdminModal')" class="w-full py-2.5 px-4 bg-[#5A52A5] hover:bg-[#4D4592] text-white text-sm font-semibold rounded-xl cursor-pointer transition-colors">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Modal: Lupa Password (No Emoji) -->
<div id="forgotModal" class="fixed inset-0 z-50 hidden bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-md rounded-2xl p-6 shadow-xl border border-slate-100 transform transition-all">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-[#5A52A5] flex items-center justify-center">
                    <!-- Key SVG Icon (No Emoji) -->
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-[#25204B]">Reset Kata Sandi</h3>
            </div>
            <button type="button" onclick="closeModal('forgotModal')" class="text-slate-400 hover:text-slate-600 cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-4 space-y-3 text-sm text-slate-600">
            <p>Untuk keamanan akses perangkat dan sistem laboratorium komputer, pemulihan akun dilakukan secara terverifikasi:</p>
            <ul class="list-disc list-inside space-y-1.5 text-xs sm:text-sm pl-1">
                <li><strong class="font-semibold text-slate-700">Siswa:</strong> Silakan hubungi teknisi atau laboran komputer dengan menunjukkan Kartu Pelajar atau NIS.</li>
                <li><strong class="font-semibold text-slate-700">Guru:</strong> Reset kata sandi dapat divalidasi langsung melalui koordinator lab komputer.</li>
            </ul>
        </div>
        <div class="mt-5">
            <button type="button" onclick="closeModal('forgotModal')" class="w-full py-2.5 px-4 bg-[#5A52A5] hover:bg-[#4D4592] text-white text-sm font-semibold rounded-xl cursor-pointer transition-colors">
                Mengerti
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    /**
     * Role selection handler.
     * Updates active tab UI, hidden input value, and input placeholder.
     */
    function selectRole(role) {
        const roles = ['siswa', 'guru', 'admin'];
        const inputRole = document.getElementById('role-input');
        const usernameInput = document.getElementById('username');
        const usernameLabel = document.getElementById('username-label');

        inputRole.value = role;

        roles.forEach(r => {
            const tab = document.getElementById('tab-' + r);
            if (r === role) {
                tab.className = 'role-tab flex-1 py-2 px-3 text-sm font-semibold rounded-xl transition-all duration-200 text-center bg-[#5A52A5] text-white shadow-sm cursor-pointer';
                tab.setAttribute('aria-selected', 'true');
            } else {
                tab.className = 'role-tab flex-1 py-2 px-3 text-sm font-medium rounded-xl transition-all duration-200 text-center text-slate-600 hover:text-[#5A52A5] hover:bg-white/60 cursor-pointer';
                tab.setAttribute('aria-selected', 'false');
            }
        });

        if (role === 'siswa') {
            usernameInput.placeholder = 'Username / NIS';
            usernameLabel.innerText = 'Username / NIS';
        } else if (role === 'guru') {
            usernameInput.placeholder = 'Username / NIP';
            usernameLabel.innerText = 'Username / NIP';
        } else if (role === 'admin') {
            usernameInput.placeholder = 'Username / Email';
            usernameLabel.innerText = 'Username / Email';
        }
    }

    /**
     * Toggle password visibility.
     */
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        const eyeSlashIcon = document.getElementById('eye-slash-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.add('hidden');
            eyeSlashIcon.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('hidden');
            eyeSlashIcon.classList.add('hidden');
        }
    }

    /**
     * Modal handlers.
     */
    function openModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    // Close modal on Escape key or backdrop click
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal('contactAdminModal');
            closeModal('forgotModal');
        }
    });

    ['contactAdminModal', 'forgotModal'].forEach(id => {
        const modal = document.getElementById(id);
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal(id);
                }
            });
        }
    });

    // Initialize with old role if present
    document.addEventListener('DOMContentLoaded', function() {
        const initialRole = document.getElementById('role-input').value || 'siswa';
        selectRole(initialRole);
    });
</script>
@endpush
@endsection
