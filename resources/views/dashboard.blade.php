<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI-LAB - Dashboard Laboratorium</title>

    <!-- Google Fonts: Plus Jakarta Sans / Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN & Chart.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        silab: {
                            50: '#faf7ff',
                            100: '#f3edff',
                            200: '#e8dbff',
                            300: '#d7beff',
                            400: '#bf94ff',
                            500: '#a366ff',
                            600: '#8a3df7',
                            700: '#7528de',
                            800: '#5e1fae',
                            900: '#4e1c8c',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f7f5ff;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #fceeff 0%, #f1e4ff 35%, #e0e7ff 100%);
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 5px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d8b4fe;
            border-radius: 10px;
        }
    </style>
</head>
<body class="min-h-screen text-slate-800 antialiased">

<div class="flex min-h-screen">
    <!-- ================= SIDEBAR ================= -->
    <aside class="w-64 bg-white/90 border-r border-purple-100/80 flex flex-col justify-between p-5 shrink-0 hidden md:flex">
        <div>
            <!-- Brand / Logo SI-LAB -->
            <div class="flex flex-col items-center text-center py-4 mb-4">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-purple-100 to-indigo-100 flex items-center justify-center shadow-inner mb-2 border border-purple-200">
                    <!-- Erlenmeyer Lab Icon -->
                    <svg class="w-9 h-9 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 2v7.31L4.36 19.46A2 2 0 0 0 6.09 22h11.82a2 2 0 0 0 1.73-2.54L14 9.31V2"/>
                        <line x1="8.5" y1="2" x2="15.5" y2="2"/>
                        <path d="M14 9.3a6.5 6.5 0 0 0-4 0"/>
                        <circle cx="9" cy="18" r="1" fill="currentColor"/>
                        <circle cx="14" cy="16" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <h1 class="text-xl font-bold tracking-tight text-slate-800">SI-LAB</h1>
                <p class="text-[11px] text-slate-400 font-medium px-2 leading-tight mt-1">Sistem Informasi Peminjaman & Inventaris Laboratorium</p>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-1.5 mt-2">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-semibold text-purple-700 bg-purple-50 shadow-sm border border-purple-100/60 transition">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="#inventaris-section" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-slate-600 hover:text-purple-700 hover:bg-purple-50/50 transition">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <span>Data Inventaris</span>
                </a>

                <button onclick="openModal()" class="w-full text-left flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-slate-600 hover:text-purple-700 hover:bg-purple-50/50 transition">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Peminjaman</span>
                </button>

                <a href="#riwayat-section" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-slate-600 hover:text-purple-700 hover:bg-purple-50/50 transition">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                    <span>Status Peminjaman</span>
                </a>

                <a href="#riwayat-section" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-slate-600 hover:text-purple-700 hover:bg-purple-50/50 transition">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Riwayat</span>
                </a>

                <a href="#pengaturan" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-slate-600 hover:text-purple-700 hover:bg-purple-50/50 transition">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Pengaturan</span>
                </a>
            </nav>
        </div>

        <!-- Sidebar Footer Promo Card & Keluar -->
        <div class="space-y-4">
            <!-- Mini Motivational Card (Mockup Style) -->
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-purple-100 via-pink-50 to-indigo-100 p-4 border border-purple-200/60 shadow-sm">
                <div class="relative z-10">
                    <p class="text-xs font-bold text-purple-900 leading-snug">Lab lebih tertib,<br>belajar lebih seru!</p>
                    <span class="inline-block mt-2 text-[10px] font-semibold text-purple-700 bg-white/80 px-2 py-0.5 rounded-full border border-purple-200">SMK RPL</span>
                </div>
                <div class="absolute -right-3 -bottom-3 w-14 h-14 bg-purple-200/50 rounded-full blur-sm"></div>
                <div class="absolute right-2 bottom-2 text-2xl">📢</div>
            </div>

            <!-- Logout Link -->
            <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-slate-500 hover:text-rose-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <!-- ================= MAIN CONTENT ================= -->
    <main class="flex-1 p-4 md:p-8 max-w-7xl mx-auto overflow-y-auto">
        <!-- Topbar: User Greeting & Profile -->
        <header class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-gradient-to-tr from-pink-300 to-purple-300 flex items-center justify-center text-white font-bold text-lg shadow-sm">
                    KA
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-900 flex items-center gap-1.5">
                        Halo, Kayla <span class="text-xl">👋</span>
                    </h2>
                    <p class="text-xs text-slate-400">Selamat datang di SI-LAB!</p>
                </div>
            </div>

            <div class="flex items-center gap-3 self-end sm:self-auto">
                <!-- Notifications Bell -->
                <button class="relative p-2.5 rounded-xl bg-white border border-purple-100 text-slate-500 hover:text-purple-600 shadow-sm transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-rose-500 rounded-full ring-2 ring-white"></span>
                </button>

                <!-- Profile Badge -->
                <div class="flex items-center gap-2.5 bg-white px-3.5 py-1.5 rounded-full border border-purple-100 shadow-sm">
                    <div class="w-7 h-7 rounded-full bg-purple-600 text-white flex items-center justify-center text-xs font-semibold">
                        K
                    </div>
                    <span class="text-xs font-semibold text-slate-700">Kayla Artalita</span>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
        </header>

        <!-- Flash Message Alerts -->
        @if(session('success'))
            <div class="mb-5 bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-2xl flex items-center gap-3 shadow-sm animate-fade-in">
                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-medium">{{ session('success') }}</span>
            </div>
        @endif
        @if(session('error'))
            <div class="mb-5 bg-rose-50 border border-rose-200 text-rose-800 px-4 py-3 rounded-2xl flex items-center gap-3 shadow-sm">
                <svg class="w-5 h-5 text-rose-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-medium">{{ session('error') }}</span>
            </div>
        @endif

        <!-- ================= HERO BANNER ================= -->
        <section class="hero-gradient rounded-3xl p-6 sm:p-8 mb-6 border border-purple-200/80 shadow-sm relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="max-w-xl z-10">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 text-purple-700 text-xs font-semibold mb-3 border border-purple-200/60 shadow-xs">
                    <span>✨</span> Sistem Informasi Laboratorium SMK
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-800 tracking-tight mb-2">SI-LAB</h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-5">
                    Kelola peminjaman dan inventaris laboratorium dengan lebih mudah dan efisien!
                </p>
                <div class="flex flex-wrap gap-3">
                    <button onclick="openModal()" class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold text-sm px-5 py-2.5 rounded-2xl shadow-md shadow-purple-500/20 transition-all hover:shadow-lg active:scale-95">
                        <span>Ajukan Peminjaman</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                    <a href="#inventaris-section" class="inline-flex items-center gap-2 bg-white/90 hover:bg-white text-purple-700 font-semibold text-sm px-4 py-2.5 rounded-2xl border border-purple-200 shadow-sm transition">
                        <span>Cek Stok Lab</span>
                    </a>
                </div>
            </div>

            <!-- Lab Illustration Vector -->
            <div class="relative z-10 shrink-0 w-44 sm:w-56 h-36 sm:h-44 flex items-center justify-center">
                <svg viewBox="0 0 200 160" class="w-full h-full drop-shadow-md" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Atom orbit -->
                    <ellipse cx="60" cy="50" rx="35" ry="14" stroke="#c084fc" stroke-width="2.5" stroke-dasharray="4 2" transform="rotate(-30 60 50)"/>
                    <ellipse cx="60" cy="50" rx="35" ry="14" stroke="#818cf8" stroke-width="2.5" transform="rotate(30 60 50)"/>
                    <circle cx="60" cy="50" r="5" fill="#a855f7"/>
                    
                    <!-- Test tubes rack -->
                    <rect x="25" y="85" width="65" height="45" rx="6" fill="#ffffff" stroke="#c084fc" stroke-width="2"/>
                    <line x1="20" y1="95" x2="95" y2="95" stroke="#9333ea" stroke-width="3" stroke-linecap="round"/>
                    
                    <!-- Tubes -->
                    <rect x="33" y="75" width="10" height="30" rx="4" fill="#f43f5e" opacity="0.8"/>
                    <rect x="52" y="72" width="10" height="33" rx="4" fill="#eab308" opacity="0.8"/>
                    <rect x="71" y="77" width="10" height="28" rx="4" fill="#3b82f6" opacity="0.8"/>
                    
                    <!-- Microscope representation -->
                    <path d="M150 120 C150 125, 120 125, 120 120 L130 115 L140 115 Z" fill="#6366f1"/>
                    <rect x="120" y="120" width="40" height="8" rx="3" fill="#4338ca"/>
                    <path d="M145 115 C160 100, 160 70, 142 55" stroke="#4f46e5" stroke-width="5" stroke-linecap="round"/>
                    <rect x="115" y="48" width="30" height="12" rx="3" transform="rotate(40 115 48)" fill="#818cf8"/>
                    <circle cx="155" cy="40" r="4" fill="#fbbf24"/>
                    <circle cx="170" cy="70" r="3" fill="#a855f7"/>
                </svg>
            </div>

            <!-- Background soft glow circles -->
            <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-purple-300/30 rounded-full blur-2xl"></div>
            <div class="absolute -left-10 -top-10 w-48 h-48 bg-pink-200/40 rounded-full blur-xl"></div>
        </section>

        <!-- ================= 4 KARTU STATISTIK UTAMA ================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- 1. Total Inventaris -->
            <div class="bg-white rounded-3xl p-5 border border-purple-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 rounded-2xl bg-pink-50 border border-pink-100 flex items-center justify-center text-pink-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <span class="inline-flex items-center gap-0.5 text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-100">
                        ↑ +2
                    </span>
                </div>
                <div class="text-3xl font-extrabold text-slate-800 mb-0.5">{{ $totalInventoryCount }}</div>
                <div class="text-xs font-medium text-slate-400">Total Inventaris</div>
                <div class="mt-2 text-[11px] text-slate-500 font-medium">Stok Tersedia: <span class="font-bold text-emerald-600">{{ $availableStockCount }} Unit</span></div>
            </div>

            <!-- 2. Peminjaman Aktif -->
            <div class="bg-white rounded-3xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 rounded-2xl bg-sky-50 border border-sky-100 flex items-center justify-center text-sky-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="inline-flex items-center gap-0.5 text-xs font-semibold text-sky-600 bg-sky-50 px-2 py-0.5 rounded-full border border-sky-100">
                        ↑ +3
                    </span>
                </div>
                <div class="text-3xl font-extrabold text-slate-800 mb-0.5">28</div>
                <div class="text-xs font-medium text-slate-400">Peminjaman Aktif</div>
                <div class="mt-2 text-[11px] text-slate-500 font-medium">Sedang digunakan murid di lab</div>
            </div>

            <!-- 3. Pengajuan Disetujui -->
            <div class="bg-white rounded-3xl p-5 border border-purple-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="inline-flex items-center gap-0.5 text-xs font-semibold text-purple-600 bg-purple-50 px-2 py-0.5 rounded-full border border-purple-100">
                        ↑ +1
                    </span>
                </div>
                <div class="text-3xl font-extrabold text-slate-800 mb-0.5">92</div>
                <div class="text-xs font-medium text-slate-400">Pengajuan Disetujui</div>
                <div class="mt-2 text-[11px] text-slate-500 font-medium">Oleh Pak Fajar (Laboran)</div>
            </div>

            <!-- 4. Stok yang Mulai Menipis -->
            <div class="bg-white rounded-3xl p-5 border border-amber-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <a href="#stok-menipis-section" class="w-6 h-6 rounded-full bg-amber-100 hover:bg-amber-200 flex items-center justify-center text-amber-800 transition" title="Lihat detail">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                <div class="text-3xl font-extrabold text-slate-800 mb-0.5">{{ $lowStockCount }}</div>
                <div class="text-xs font-medium text-slate-400">Stok Menipis</div>
                <div class="mt-2 text-[11px] text-rose-500 font-semibold flex items-center gap-1">
                    <span>⚠️</span> Perlu pengecekan fisik berkala
                </div>
            </div>
        </div>

        <!-- ================= BAGIAN TENGAH: GRAFIK & INVENTARIS TERPOPULER ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- GRAFIK PEMINJAMAN (2 Kolom) -->
            <div class="lg:col-span-2 bg-white rounded-3xl p-6 border border-purple-100 shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-2 rounded-xl bg-purple-50 text-purple-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Ringkasan Peminjaman</h3>
                    </div>

                    <!-- Dropdown Filter Range -->
                    <div class="relative">
                        <select class="text-xs font-semibold bg-purple-50/70 text-purple-800 border border-purple-200/80 rounded-xl px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-purple-300 cursor-pointer">
                            <option>7 Hari Terakhir</option>
                            <option>Bulan Ini</option>
                            <option>Semester Ini</option>
                        </select>
                    </div>
                </div>

                <!-- Canvas Chart -->
                <div class="relative w-full h-64">
                    <canvas id="borrowingChart"></canvas>
                </div>

                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                    <span class="flex items-center gap-2 font-medium">
                        <span class="w-3 h-3 rounded-full bg-purple-600 inline-block"></span> Tren Transaksi Harian Siswa
                    </span>
                    <span>Puncak peminjaman tertinggi: <b>Hari Jumat (13 Alat)</b></span>
                </div>
            </div>

            <!-- INVENTARIS TERPOPULER (1 Kolom) -->
            <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <div class="p-2 rounded-xl bg-amber-50 text-amber-600">
                                <span>🏆</span>
                            </div>
                            <h3 class="text-base font-bold text-slate-800">Inventaris Terpopuler</h3>
                        </div>
                        <span class="text-xs text-purple-600 font-semibold bg-purple-50 px-2 py-0.5 rounded-full">Top 5</span>
                    </div>

                    <!-- List Popular Items -->
                    <div class="space-y-3.5">
                        @foreach($popularInventories as $pop)
                            <div class="flex items-center justify-between p-2.5 rounded-2xl hover:bg-purple-50/50 transition border border-transparent hover:border-purple-100">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-purple-100/60 text-purple-700 flex items-center justify-center font-bold text-sm">
                                        @if(str_contains(strtolower($pop->name), 'laptop'))
                                            💻
                                        @elseif(str_contains(strtolower($pop->name), 'proyektor'))
                                            📽️
                                        @elseif(str_contains(strtolower($pop->name), 'kamera'))
                                            📷
                                        @elseif(str_contains(strtolower($pop->name), 'mikroskop'))
                                            🔬
                                        @elseif(str_contains(strtolower($pop->name), 'tripod'))
                                            📐
                                        @else
                                            📦
                                        @endif
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">{{ $pop->name }}</h4>
                                        <p class="text-[11px] text-slate-400">Tersedia {{ $pop->available_stock }} dari {{ $pop->total_stock }} {{ $pop->unit }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-bold text-purple-700 bg-purple-50 px-2.5 py-1 rounded-xl border border-purple-100">
                                        {{ $pop->borrowed_count }} dipinjam
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100">
                    <a href="#stok-menipis-section" class="text-xs font-bold text-purple-600 hover:text-purple-700 flex items-center justify-center gap-1 transition">
                        <span>Pemeriksaan Stok Real-time</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- ================= BAGIAN BAWAH: NOTIFIKASI AKTIVITAS & CALL TO ACTION ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- AKTIVITAS TERBARU & NOTIFIKASI (2 Kolom) -->
            <div class="lg:col-span-2 bg-white rounded-3xl p-6 border border-purple-100 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-2 rounded-xl bg-purple-50 text-purple-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Aktivitas & Notifikasi Terbaru</h3>
                    </div>
                    <a href="#riwayat-section" class="text-xs font-bold text-purple-600 hover:text-purple-700 flex items-center gap-1">
                        <span>Lihat Semua</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <div class="space-y-3">
                    @foreach($activities as $act)
                        <div class="flex items-center justify-between p-3 rounded-2xl bg-slate-50/70 border border-slate-100 hover:border-purple-200 transition">
                            <div class="flex items-center gap-3">
                                <!-- Type Icon -->
                                <div class="w-9 h-9 rounded-xl flex items-center justify-center shrink-0 
                                    @if($act->type == 'pengajuan') bg-amber-100 text-amber-700 
                                    @elseif($act->type == 'persetujuan') bg-emerald-100 text-emerald-700 
                                    @elseif($act->type == 'pengembalian') bg-sky-100 text-sky-700 
                                    @else bg-rose-100 text-rose-700 @endif">
                                    @if($act->type == 'pengajuan')
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                        </svg>
                                    @elseif($act->type == 'persetujuan')
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    @elseif($act->type == 'pengembalian')
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-slate-800">{{ $act->title }}</h4>
                                    <p class="text-[11px] text-slate-400">{{ $act->subtitle }}</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <span class="text-[11px] text-slate-400 font-medium hidden sm:inline">{{ $act->time_ago }}</span>
                                <span class="text-xs font-semibold px-2.5 py-1 rounded-full 
                                    @if($act->badge_variant == 'warning') bg-amber-50 text-amber-700 border border-amber-200 
                                    @elseif($act->badge_variant == 'success') bg-emerald-50 text-emerald-700 border border-emerald-200 
                                    @elseif($act->badge_variant == 'info') bg-sky-50 text-sky-700 border border-sky-200 
                                    @else bg-rose-50 text-rose-700 border border-rose-200 @endif">
                                    {{ $act->status_badge }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- CTA KARTU PEMINJAMAN CEPAT (1 Kolom) -->
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-amber-50 via-purple-50 to-indigo-100 p-6 border border-purple-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center text-purple-600 mb-4 border border-purple-100">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-slate-800 leading-snug mb-1">Ajukan Peminjaman Sekarang!</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-6">
                        Isi form peminjaman dengan mudah dan cepat. Pastikan mengajukan minimal H-1 sebelum pemakaian alat di laboratorium.
                    </p>
                </div>

                <div>
                    <button onclick="openModal()" class="w-full flex items-center justify-center gap-2 bg-purple-600 hover:bg-purple-700 text-white font-semibold text-xs sm:text-sm py-3 px-4 rounded-2xl shadow-md transition active:scale-95">
                        <span>Ajukan Peminjaman</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                    <p class="text-[10px] text-center text-slate-400 mt-2 font-medium">Validasi otomatis persetujuan Laboran Pak Fajar</p>
                </div>
            </div>
        </div>

        <!-- ================= DETAIL STOK MENIPIS & INVENTARIS REAL-TIME ================= -->
        <section id="stok-menipis-section" class="bg-white rounded-3xl p-6 border border-amber-200/80 shadow-sm mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                <div class="flex items-center gap-2">
                    <span class="text-xl">⚠️</span>
                    <div>
                        <h3 class="text-base font-bold text-slate-800">Daftar Alat dengan Stok Menipis</h3>
                        <p class="text-xs text-slate-400">Peringatan otomatis untuk inventaris yang stoknya di bawah batas minimal (Real-time)</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-amber-700 bg-amber-50 px-3 py-1 rounded-full border border-amber-200 self-start sm:self-auto">
                    {{ $lowStockCount }} Alat Perlu Perhatian
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-slate-600">
                    <thead class="bg-purple-50/60 text-purple-900 uppercase font-semibold">
                        <tr>
                            <th class="px-4 py-3 rounded-l-xl">Kode Barang</th>
                            <th class="px-4 py-3">Nama Alat Lab</th>
                            <th class="px-4 py-3">Lokasi</th>
                            <th class="px-4 py-3">Total Stok</th>
                            <th class="px-4 py-3">Stok Tersedia</th>
                            <th class="px-4 py-3">Batas Minimum</th>
                            <th class="px-4 py-3 rounded-r-xl text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($lowStockItems as $low)
                            <tr class="hover:bg-amber-50/30 transition">
                                <td class="px-4 py-3 font-mono font-semibold text-purple-700">{{ $low->code }}</td>
                                <td class="px-4 py-3 font-bold text-slate-800">{{ $low->name }}</td>
                                <td class="px-4 py-3">{{ $low->location }}</td>
                                <td class="px-4 py-3">{{ $low->total_stock }} {{ $low->unit }}</td>
                                <td class="px-4 py-3 font-extrabold text-rose-600">{{ $low->available_stock }} {{ $low->unit }}</td>
                                <td class="px-4 py-3">{{ $low->min_stock_alert }} {{ $low->unit }}</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="bg-rose-100 text-rose-700 font-bold px-2.5 py-0.5 rounded-full text-[10px]">
                                        Menipis
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</div>

<!-- ================= MODAL PENGAJUAN PEMINJAMAN (H-1) ================= -->
<div id="borrowModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl border border-purple-100 transform transition-all">
        <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
            <div class="flex items-center gap-2">
                <div class="p-2 rounded-xl bg-purple-50 text-purple-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-bold text-slate-800">Form Peminjaman Alat Online</h3>
                    <p class="text-[11px] text-slate-400">Aturan Pengajuan Minimal H-1 Sebelum Hari-H</p>
                </div>
            </div>
            <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600 p-1.5 rounded-xl hover:bg-slate-100 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <form action="{{ route('borrowing.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Pilih Alat Laboratorium</label>
                <select name="inventory_id" required class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2.5 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 focus:outline-none">
                    <option value="">-- Pilih Barang / Alat Lab --</option>
                    @foreach($allInventories as $item)
                        <option value="{{ $item->id }}" {{ $item->available_stock <= 0 ? 'disabled' : '' }}>
                            {{ $item->name }} (Sisa: {{ $item->available_stock }} {{ $item->unit }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Peminjam</label>
                    <input type="text" name="borrower_name" value="Kayla Artalita" required class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2 focus:border-purple-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Kelas / Unit</label>
                    <input type="text" name="borrower_class" value="X1-RPL" required class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2 focus:border-purple-500 focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-3">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tanggal (Min H-1)</label>
                    <input type="date" name="borrow_date" id="borrowDateInput" required class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2 focus:border-purple-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Durasi (Jam)</label>
                    <input type="number" name="duration_hours" min="1" max="10" value="3" required class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2 focus:border-purple-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Jumlah</label>
                    <input type="number" name="quantity" min="1" value="1" required class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2 focus:border-purple-500 focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Keperluan Penggunaan Alat</label>
                <textarea name="purpose" rows="2" required placeholder="Contoh: Praktikum Pemrograman Web dan Presentasi Proyek" class="w-full text-xs rounded-xl border border-slate-200 px-3 py-2 focus:border-purple-500 focus:outline-none"></textarea>
            </div>

            <div class="flex items-center gap-2 bg-purple-50/60 p-2.5 rounded-xl border border-purple-100">
                <input type="checkbox" name="is_outside_class_hours" value="1" id="outsideHours" class="rounded text-purple-600 focus:ring-purple-500">
                <label for="outsideHours" class="text-xs text-slate-700 font-medium">Peminjaman di luar jam pelajaran (Perlu validasi Kepala Jurusan)</label>
            </div>

            <div class="flex justify-end gap-2 pt-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-xl transition">Batal</button>
                <button type="submit" class="px-5 py-2 text-xs font-bold text-white bg-purple-600 hover:bg-purple-700 rounded-xl shadow-md transition">Kirim Pengajuan</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= JAVASCRIPT: CHART.JS & MODAL ================= -->
<script>
    // 1. Inisialisasi Chart.js Tren Peminjaman
    const ctx = document.getElementById('borrowingChart').getContext('2d');
    
    // Gradient fill effect
    const gradient = ctx.createLinearGradient(0, 0, 0, 250);
    gradient.addColorStop(0, 'rgba(147, 51, 234, 0.25)');
    gradient.addColorStop(1, 'rgba(147, 51, 234, 0.0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($chartDays) !!},
            datasets: [{
                label: 'Jumlah Peminjaman',
                data: {!! json_encode($chartValues) !!},
                borderColor: '#9333ea',
                borderWidth: 2.5,
                backgroundColor: gradient,
                fill: true,
                tension: 0.35,
                pointBackgroundColor: '#9333ea',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 7,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#1e1b4b',
                    titleFont: { size: 12, weight: 'bold' },
                    bodyFont: { size: 11 },
                    padding: 10,
                    cornerRadius: 10,
                    callbacks: {
                        label: function(context) {
                            return context.parsed.y + ' Alat Dipinjam';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 15,
                    ticks: {
                        stepSize: 5,
                        color: '#94a3b8',
                        font: { size: 11 }
                    },
                    grid: {
                        color: '#f1f5f9',
                        drawBorder: false
                    }
                },
                x: {
                    ticks: {
                        color: '#64748b',
                        font: { size: 11, weight: '600' }
                    },
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // 2. Modal Functions & H-1 Date Setter
    function openModal() {
        document.getElementById('borrowModal').classList.remove('hidden');
        // Set default date minimum tomorrow (H-1)
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        const yyyy = tomorrow.getFullYear();
        const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
        const dd = String(tomorrow.getDate()).padStart(2, '0');
        const minDate = `${yyyy}-${mm}-${dd}`;
        const input = document.getElementById('borrowDateInput');
        if (input) {
            input.min = minDate;
            if (!input.value) input.value = minDate;
        }
    }

    function closeModal() {
        document.getElementById('borrowModal').classList.add('hidden');
    }

    // Close modal on click outside
    window.onclick = function(event) {
        const modal = document.getElementById('borrowModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>

</body>
</html>
