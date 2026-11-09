<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-LAB - Riwayat Peminjaman</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #DDE2F7;
        }
        /* Custom scrollbar for table container */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #F1F4FD;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #C4B5FD;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #8B5CF6;
        }
    </style>
</head>
<body class="min-h-screen p-3 sm:p-6 lg:p-8 flex items-center justify-center">

    <!-- Container Kartu Utama -->
    <div class="w-full max-w-5xl bg-white rounded-[2.2rem] shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[580px] relative">
        
        <!-- SIDEBAR -->
        <aside class="w-full md:w-56 bg-white p-6 flex flex-col justify-between shrink-0 z-10 border-b md:border-b-0 md:border-r border-slate-100/80">
            <div>
                <!-- Brand: SI-LAB -->
                <div class="flex items-center gap-3 mb-8 px-1">
                    <div class="w-9 h-9 rounded-xl bg-purple-100 flex items-center justify-center text-[#5538EE]">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M19.8 18.4L14 9.2V4h1a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2h1v5.2L4.2 18.4A3 3 0 0 0 6.7 23h10.6a3 3 0 0 0 2.5-4.6zM12 10.8l4.5 7.2H7.5L12 10.8z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-extrabold tracking-tight text-[#2D2A57]">SI-LAB</span>
                </div>

                <!-- Navigation List -->
                <nav class="space-y-1 text-[13px]">
                    <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-600 hover:text-[#5538EE] hover:bg-slate-50 font-medium transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>

                    <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-600 hover:text-[#5538EE] hover:bg-slate-50 font-medium transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        Data Inventaris
                    </a>

                    <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-600 hover:text-[#5538EE] hover:bg-slate-50 font-medium transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Peminjaman
                    </a>

                    <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-600 hover:text-[#5538EE] hover:bg-slate-50 font-medium transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        Status Peminjaman
                    </a>

                    <!-- Riwayat (ACTIVE PILL) -->
                    <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-[#EBE9FE] text-[#5538EE] font-bold shadow-xs">
                        <svg class="w-4 h-4 text-[#5538EE]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Riwayat
                    </a>
                </nav>
            </div>

            <!-- Keluar -->
            <div class="pt-4 mt-auto">
                <a href="#" class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-slate-600 hover:text-red-600 font-medium text-[13px] transition">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Keluar
                </a>
            </div>
        </aside>

        <!-- KONTEN UTAMA -->
        <main class="flex-1 p-6 sm:p-8 flex flex-col justify-between relative bg-white overflow-hidden">
            <div class="relative z-10 w-full max-w-2xl">
                <!-- Header: Judul & Profil Kayla -->
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h1 class="text-xl sm:text-2xl font-bold text-[#1E1B4B] tracking-tight">Riwayat Peminjaman</h1>
                        <p class="text-[12px] sm:text-[13px] text-slate-400 font-normal mt-0.5">Catatan lengkap peminjaman dan pengembalian alat</p>
                    </div>

                    <!-- User Pill: Kayla Artalita -->
                    <div class="flex items-center gap-2 bg-slate-50 hover:bg-slate-100 py-1 px-2.5 rounded-full border border-slate-100 cursor-pointer transition shrink-0 ml-4">
                        <div class="w-6 h-6 rounded-full bg-slate-800 text-white flex items-center justify-center">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                        <span class="text-[11px] font-semibold text-slate-700">Kayla Artalita</span>
                        <svg class="w-3 h-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>

                <!-- Input Pencarian & Filter Tanggal Popover -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 mb-5 relative">
                    <!-- Cari nama alat... -->
                    <div class="relative flex-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </span>
                        <input id="searchInput" type="text" placeholder="Cari nama alat..." 
                               class="w-full pl-10 pr-8 py-2 text-[13px] rounded-xl border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:border-[#5538EE] bg-white transition shadow-2xs" />
                        <button id="clearSearchBtn" class="hidden absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Filter Tanggal Dropdown Button -->
                    <div class="relative shrink-0">
                        <button id="filterDateBtn" type="button" class="w-full flex items-center justify-between gap-3 px-3.5 py-2 text-[12.5px] font-medium text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-2xs">
                            <span id="filterLabel">Filter Tanggal</span>
                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <!-- Dropdown Menu / Date Picker Box -->
                        <div id="filterDropdown" class="hidden absolute right-0 mt-2 w-72 bg-white rounded-2xl shadow-xl border border-slate-100 p-4 z-50">
                            <div class="flex items-center justify-between pb-2 mb-3 border-b border-slate-100">
                                <span class="text-xs font-bold text-slate-700">Filter Berdasarkan Tanggal</span>
                                <button id="resetFilterBtn" type="button" class="text-[11px] text-purple-600 hover:underline font-semibold">Reset</button>
                            </div>
                            
                            <!-- Preset options -->
                            <div class="grid grid-cols-2 gap-1.5 mb-3 text-[11px]">
                                <button type="button" onclick="setPreset('today')" class="px-2.5 py-1.5 rounded-lg bg-slate-50 hover:bg-purple-50 hover:text-purple-700 text-slate-600 text-left font-medium">Hari Ini</button>
                                <button type="button" onclick="setPreset('this_month')" class="px-2.5 py-1.5 rounded-lg bg-slate-50 hover:bg-purple-50 hover:text-purple-700 text-slate-600 text-left font-medium">Bulan Ini</button>
                                <button type="button" onclick="setPreset('oct_2026')" class="px-2.5 py-1.5 rounded-lg bg-slate-50 hover:bg-purple-50 hover:text-purple-700 text-slate-600 text-left font-medium">Okt 2026</button>
                                <button type="button" onclick="setPreset('nov_2026')" class="px-2.5 py-1.5 rounded-lg bg-slate-50 hover:bg-purple-50 hover:text-purple-700 text-slate-600 text-left font-medium">Nov 2026</button>
                            </div>

                            <!-- Custom Date Range -->
                            <div class="space-y-2 text-xs">
                                <div>
                                    <label class="block text-[10px] text-slate-400 font-semibold uppercase tracking-wider mb-1">Dari Tanggal</label>
                                    <input type="date" id="startDate" class="w-full text-xs px-2.5 py-1.5 rounded-lg border border-slate-200 text-slate-700 focus:outline-none focus:border-purple-500" />
                                </div>
                                <div>
                                    <label class="block text-[10px] text-slate-400 font-semibold uppercase tracking-wider mb-1">Sampai Tanggal</label>
                                    <input type="date" id="endDate" class="w-full text-xs px-2.5 py-1.5 rounded-lg border border-slate-200 text-slate-700 focus:outline-none focus:border-purple-500" />
                                </div>
                            </div>
                            
                            <button type="button" id="applyDateBtn" class="w-full mt-3 py-1.5 bg-[#5538EE] hover:bg-[#472cd6] text-white text-xs font-semibold rounded-lg shadow-sm transition">
                                Terapkan Filter
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tabel Riwayat (Dengan scroll jika data banyak) -->
                <div class="overflow-x-auto rounded-xl border border-slate-100 shadow-2xs custom-scrollbar max-h-[310px]">
                    <table class="w-full text-left text-[12.5px] border-collapse" id="dataTable">
                        <thead class="sticky top-0 bg-[#FAF9FF] z-10 shadow-2xs">
                            <tr class="border-b border-slate-100 text-[#1E1B4B] font-bold">
                                <th class="py-2.5 px-3.5 text-center w-12 font-bold">No.</th>
                                <th class="py-2.5 px-3.5 font-bold">Nama Alat</th>
                                <th class="py-2.5 px-3.5 font-bold">Tanggal Pinjam</th>
                                <th class="py-2.5 px-3.5 font-bold">Tanggal Kembali</th>
                                <th class="py-2.5 px-3.5 text-center font-bold">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody" class="divide-y divide-slate-100 text-slate-700 bg-white">
                            <!-- Diisi via JavaScript -->
                        </tbody>
                    </table>

                    <!-- Empty State saat data tidak ditemukan -->
                    <div id="noDataMessage" class="hidden py-10 text-center">
                        <svg class="w-10 h-10 mx-auto text-slate-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs font-semibold text-slate-600">Tidak ada riwayat yang cocok</p>
                        <p class="text-[11px] text-slate-400 mt-0.5">Coba gunakan kata kunci atau rentang tanggal lain</p>
                    </div>
                </div>

                <!-- Total Data Info -->
                <div class="flex items-center justify-between mt-2.5 px-1 text-[11px] text-slate-400">
                    <span id="dataCountText">Menampilkan 0 data</span>
                    <span class="text-slate-300">• Laboratorium Terpadu</span>
                </div>
            </div>

            <!-- ILUSTRASI KANAN BAWAH (Tas Kerja & Jam Dinding Persis Gambar) -->
            <div class="absolute -right-4 -bottom-6 pointer-events-none select-none z-0 hidden lg:block">
                <svg width="250" height="230" viewBox="0 0 250 230" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="200" cy="225" rx="140" ry="40" fill="#FCE7B3" opacity="0.85" />
                    <ellipse cx="220" cy="235" rx="100" ry="25" fill="#FBD38D" opacity="0.6" />

                    <!-- KOPER / FOLDER UNGU -->
                    <g transform="translate(45, 30) rotate(-4)">
                        <path d="M55 24 C55 12, 85 12, 85 24" stroke="#5B45A8" stroke-width="7" stroke-linecap="round" fill="none" />
                        <rect x="52" y="22" width="6" height="8" rx="2" fill="#4B3A8E"/>
                        <rect x="82" y="22" width="6" height="8" rx="2" fill="#4B3A8E"/>
                        
                        <rect x="15" y="26" width="115" height="110" rx="16" fill="#C4B5FD" />
                        <rect x="15" y="26" width="115" height="110" rx="16" fill="url(#bag-gradient)" />
                        
                        <path d="M15 42 Q72 50 130 42 L130 72 Q72 80 15 72 Z" fill="#A78BFA" opacity="0.5"/>
                        <rect x="62" y="52" width="16" height="18" rx="4" fill="#6D28D9" />
                        <rect x="66" y="62" width="8" height="4" rx="2" fill="#EDE9FE" />
                    </g>

                    <!-- JAM ANALOG -->
                    <g transform="translate(130, 95)">
                        <circle cx="50" cy="50" r="46" fill="#93C5FD" opacity="0.3"/>
                        <circle cx="48" cy="48" r="44" fill="#FFFFFF" stroke="#3B82F6" stroke-width="6"/>
                        <circle cx="48" cy="48" r="3.5" fill="#1E3A8A"/>
                        <circle cx="48" cy="14" r="2" fill="#60A5FA"/>
                        <circle cx="82" cy="48" r="2" fill="#60A5FA"/>
                        <circle cx="48" cy="82" r="2" fill="#60A5FA"/>
                        <circle cx="14" cy="48" r="2" fill="#60A5FA"/>
                        <line x1="48" y1="48" x2="33" y2="28" stroke="#1E40AF" stroke-width="4.5" stroke-linecap="round"/>
                        <line x1="48" y1="48" x2="52" y2="18" stroke="#2563EB" stroke-width="3" stroke-linecap="round"/>
                    </g>

                    <defs>
                        <linearGradient id="bag-gradient" x1="15" y1="26" x2="130" y2="136" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#DDD6FE" />
                            <stop offset="1" stop-color="#A78BFA" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </main>

    </div>

    <!-- SCRIPT DATA & PENCARIAN & FILTER TANGGAL -->
    <script>
        // Data Peminjaman Lengkap
        const riwayatData = [
            { id: 1, nama: 'Laptop', pinjamDate: '2026-11-01', pinjamStr: '01 Nov 2026', kembaliDate: '2026-11-03', kembaliStr: '03 Nov 2026', status: 'Selesai' },
            { id: 2, nama: 'Proyektor', pinjamDate: '2026-10-25', pinjamStr: '25 Okt 2026', kembaliDate: '2026-10-27', kembaliStr: '27 Okt 2026', status: 'Selesai' },
            { id: 3, nama: 'Tripod', pinjamDate: '2026-10-20', pinjamStr: '20 Okt 2026', kembaliDate: null, kembaliStr: '-', status: 'Dipinjam' },
            { id: 4, nama: 'Mikroskop Digital', pinjamDate: '2026-11-05', pinjamStr: '05 Nov 2026', kembaliDate: null, kembaliStr: '-', status: 'Dipinjam' },
            { id: 5, nama: 'Kamera DSLR Canon', pinjamDate: '2026-10-28', pinjamStr: '28 Okt 2026', kembaliDate: '2026-10-30', kembaliStr: '30 Okt 2026', status: 'Selesai' },
            { id: 6, nama: 'Oscilloscope', pinjamDate: '2026-10-15', pinjamStr: '15 Okt 2026', kembaliDate: '2026-10-18', kembaliStr: '18 Okt 2026', status: 'Selesai' },
            { id: 7, nama: 'Multimeter Digital', pinjamDate: '2026-11-07', pinjamStr: '07 Nov 2026', kembaliDate: null, kembaliStr: '-', status: 'Dipinjam' },
            { id: 8, nama: 'Sound Level Meter', pinjamDate: '2026-10-10', pinjamStr: '10 Okt 2026', kembaliDate: '2026-10-12', kembaliStr: '12 Okt 2026', status: 'Selesai' },
            { id: 9, nama: 'Pointer Presentation', pinjamDate: '2026-11-02', pinjamStr: '02 Nov 2026', kembaliDate: '2026-11-04', kembaliStr: '04 Nov 2026', status: 'Selesai' },
            { id: 10, nama: 'Power Supply DC', pinjamDate: '2026-09-29', pinjamStr: '29 Sep 2026', kembaliDate: '2026-10-02', kembaliStr: '02 Okt 2026', status: 'Selesai' },
            { id: 11, nama: 'Kabel VGA & HDMI', pinjamDate: '2026-11-08', pinjamStr: '08 Nov 2026', kembaliDate: null, kembaliStr: '-', status: 'Dipinjam' },
            { id: 12, nama: 'Spectrophotometer', pinjamDate: '2026-10-05', pinjamStr: '05 Okt 2026', kembaliDate: '2026-10-08', kembaliStr: '08 Okt 2026', status: 'Selesai' }
        ];

        let filterStart = null;
        let filterEnd = null;

        const searchInput = document.getElementById('searchInput');
        const clearSearchBtn = document.getElementById('clearSearchBtn');
        const filterDateBtn = document.getElementById('filterDateBtn');
        const filterDropdown = document.getElementById('filterDropdown');
        const filterLabel = document.getElementById('filterLabel');
        const startDateInput = document.getElementById('startDate');
        const endDateInput = document.getElementById('endDate');
        const applyDateBtn = document.getElementById('applyDateBtn');
        const resetFilterBtn = document.getElementById('resetFilterBtn');
        const tableBody = document.getElementById('tableBody');
        const noDataMessage = document.getElementById('noDataMessage');
        const dataCountText = document.getElementById('dataCountText');

        // Toggle Filter Dropdown
        filterDateBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            filterDropdown.classList.toggle('hidden');
        });

        // Close dropdown when click outside
        document.addEventListener('click', (e) => {
            if (!filterDropdown.contains(e.target) && !filterDateBtn.contains(e.target)) {
                filterDropdown.classList.add('hidden');
            }
        });

        // Search Input Listener
        searchInput.addEventListener('input', () => {
            if (searchInput.value.trim().length > 0) {
                clearSearchBtn.classList.remove('hidden');
            } else {
                clearSearchBtn.classList.add('hidden');
            }
            renderTable();
        });

        clearSearchBtn.addEventListener('click', () => {
            searchInput.value = '';
            clearSearchBtn.classList.add('hidden');
            renderTable();
        });

        // Preset Button Handler
        function setPreset(type) {
            const today = new Date('2026-11-09'); // simulasi tanggal hari ini
            if (type === 'today') {
                startDateInput.value = '2026-11-09';
                endDateInput.value = '2026-11-09';
            } else if (type === 'this_month') {
                startDateInput.value = '2026-11-01';
                endDateInput.value = '2026-11-30';
            } else if (type === 'oct_2026') {
                startDateInput.value = '2026-10-01';
                endDateInput.value = '2026-10-31';
            } else if (type === 'nov_2026') {
                startDateInput.value = '2026-11-01';
                endDateInput.value = '2026-11-30';
            }
            applyDateFilter();
        }

        // Apply Date Filter
        applyDateBtn.addEventListener('click', applyDateFilter);

        function applyDateFilter() {
            filterStart = startDateInput.value || null;
            filterEnd = endDateInput.value || null;

            if (filterStart && filterEnd) {
                filterLabel.innerText = `${formatShort(filterStart)} - ${formatShort(filterEnd)}`;
                filterDateBtn.classList.add('bg-purple-50', 'text-purple-700', 'border-purple-200');
            } else if (filterStart) {
                filterLabel.innerText = `≥ ${formatShort(filterStart)}`;
                filterDateBtn.classList.add('bg-purple-50', 'text-purple-700', 'border-purple-200');
            } else {
                filterLabel.innerText = 'Filter Tanggal';
                filterDateBtn.classList.remove('bg-purple-50', 'text-purple-700', 'border-purple-200');
            }

            filterDropdown.classList.add('hidden');
            renderTable();
        }

        // Reset Filter
        resetFilterBtn.addEventListener('click', () => {
            startDateInput.value = '';
            endDateInput.value = '';
            filterStart = null;
            filterEnd = null;
            filterLabel.innerText = 'Filter Tanggal';
            filterDateBtn.classList.remove('bg-purple-50', 'text-purple-700', 'border-purple-200');
            filterDropdown.classList.add('hidden');
            renderTable();
        });

        function formatShort(dateStr) {
            const parts = dateStr.split('-');
            const months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
            return `${parts[2]} ${months[parseInt(parts[1], 10)-1]}`;
        }

        // Render Table Data
        function renderTable() {
            const query = searchInput.value.toLowerCase().trim();

            const filtered = riwayatData.filter(item => {
                // Search filter by name
                const matchesSearch = item.nama.toLowerCase().includes(query);

                // Date filter based on pinjamDate
                let matchesDate = true;
                if (filterStart && item.pinjamDate < filterStart) {
                    matchesDate = false;
                }
                if (filterEnd && item.pinjamDate > filterEnd) {
                    matchesDate = false;
                }

                return matchesSearch && matchesDate;
            });

            // Update row rendering
            tableBody.innerHTML = '';
            if (filtered.length === 0) {
                noDataMessage.classList.remove('hidden');
            } else {
                noDataMessage.classList.add('hidden');
                filtered.forEach((item, index) => {
                    const isSelesai = item.status === 'Selesai';
                    const badgeClass = isSelesai 
                        ? 'bg-[#DEF7EC] text-[#03543F]' 
                        : 'bg-[#E1EFFE] text-[#1E429F]';

                    const row = `
                        <tr class="hover:bg-slate-50/60 transition">
                            <td class="py-2.5 px-3.5 text-center font-medium text-slate-500">${index + 1}</td>
                            <td class="py-2.5 px-3.5 font-semibold text-slate-800">${item.nama}</td>
                            <td class="py-2.5 px-3.5 text-slate-600">${item.pinjamStr}</td>
                            <td class="py-2.5 px-3.5 ${item.kembaliDate ? 'text-slate-600' : 'text-slate-400 font-medium'}">${item.kembaliStr}</td>
                            <td class="py-2.5 px-3.5 text-center">
                                <span class="inline-block px-3.5 py-0.5 rounded-full text-[11px] font-semibold ${badgeClass}">
                                    ${item.status}
                                </span>
                            </td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', row);
                });
            }

            dataCountText.innerText = `Menampilkan ${filtered.length} dari ${riwayatData.length} data`;
        }

        // Inisialisasi awal
        renderTable();
    </script>
</body>
</html>
