<?php

namespace Database\Seeders;

use App\Models\ActivityNotification;
use App\Models\Borrowing;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class SilabDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Categories
        $catHardware = Category::firstOrCreate(['slug' => 'perangkat-keras'], ['name' => 'Perangkat Keras & Komputer']);
        $catMultimedia = Category::firstOrCreate(['slug' => 'multimedia'], ['name' => 'Multimedia & Audio Visual']);
        $catLaboratorium = Category::firstOrCreate(['slug' => 'alat-lab'], ['name' => 'Alat & Instrumen Laboratorium']);
        $catJaringan = Category::firstOrCreate(['slug' => 'jaringan'], ['name' => 'Perangkat Jaringan']);

        // 2. Inventories (Total sekitar 120 item, 5 stok menipis)
        $items = [
            [
                'code' => 'INV-LPT-001',
                'name' => 'Laptop Asus Core i7',
                'category_id' => $catHardware->id,
                'icon' => 'laptop',
                'total_stock' => 30,
                'available_stock' => 6, // 24 sedang dipinjam
                'min_stock_alert' => 5,
                'unit' => 'Unit',
                'location' => 'Lab RPL 1',
            ],
            [
                'code' => 'INV-PRJ-002',
                'name' => 'Proyektor Epson EB-X400',
                'category_id' => $catMultimedia->id,
                'icon' => 'projector',
                'total_stock' => 25,
                'available_stock' => 5, // 20 sedang dipinjam -> Stok batas/menipis
                'min_stock_alert' => 5,
                'unit' => 'Unit',
                'location' => 'Lemari Multimedia',
            ],
            [
                'code' => 'INV-CAM-003',
                'name' => 'Kamera DSLR Canon EOS',
                'category_id' => $catMultimedia->id,
                'icon' => 'camera',
                'total_stock' => 20,
                'available_stock' => 2, // 18 dipinjam -> Menipis!
                'min_stock_alert' => 4,
                'unit' => 'Unit',
                'location' => 'Studio Multimedia',
            ],
            [
                'code' => 'INV-MIC-004',
                'name' => 'Mikroskop Digital USB',
                'category_id' => $catLaboratorium->id,
                'icon' => 'microscope',
                'total_stock' => 18,
                'available_stock' => 3, // 15 dipinjam -> Menipis!
                'min_stock_alert' => 5,
                'unit' => 'Unit',
                'location' => 'Rak Lab Sains',
            ],
            [
                'code' => 'INV-TRP-005',
                'name' => 'Tripod Kamera Takara',
                'category_id' => $catMultimedia->id,
                'icon' => 'tripod',
                'total_stock' => 15,
                'available_stock' => 3, // 12 dipinjam -> Menipis!
                'min_stock_alert' => 4,
                'unit' => 'Unit',
                'location' => 'Gudang Lab',
            ],
            [
                'code' => 'INV-CRB-006',
                'name' => 'Crimping Tool RJ45',
                'category_id' => $catJaringan->id,
                'icon' => 'wrench',
                'total_stock' => 8,
                'available_stock' => 2, // Menipis! (Total 5 item stok menipis sesuai mockup)
                'min_stock_alert' => 3,
                'unit' => 'Pcs',
                'location' => 'Lab Jaringan',
            ],
            [
                'code' => 'INV-LAN-007',
                'name' => 'LAN Cable Tester Digital',
                'category_id' => $catJaringan->id,
                'icon' => 'network',
                'total_stock' => 4,
                'available_stock' => 4,
                'min_stock_alert' => 2,
                'unit' => 'Unit',
                'location' => 'Lab Jaringan',
            ],
        ];

        foreach ($items as $itemData) {
            Inventory::updateOrCreate(['code' => $itemData['code']], $itemData);
        }

        // 3. Borrowings data
        $laptop = Inventory::where('code', 'INV-LPT-001')->first();
        $proyektor = Inventory::where('code', 'INV-PRJ-002')->first();
        $kamera = Inventory::where('code', 'INV-CAM-003')->first();
        $mikroskop = Inventory::where('code', 'INV-MIC-004')->first();

        Borrowing::firstOrCreate(
            ['borrowing_code' => 'BRW-20261109-001'],
            [
                'inventory_id' => $laptop->id,
                'borrower_name' => 'Andi Pratama',
                'borrower_class' => 'X1-RPL',
                'borrower_role' => 'Siswa',
                'borrow_date' => now()->addDay(),
                'return_date' => now()->addDay(),
                'duration_hours' => 3,
                'quantity' => 1,
                'purpose' => 'Praktikum Uji Kompetensi Pemrograman Web di Ruang Lab 1',
                'is_outside_class_hours' => false,
                'status' => 'menunggu',
                'notes' => 'Konfirmasi pengajuan H-1',
            ]
        );

        Borrowing::firstOrCreate(
            ['borrowing_code' => 'BRW-20261109-002'],
            [
                'inventory_id' => $kamera->id,
                'borrower_name' => 'Keysya Amanda',
                'borrower_class' => 'X1-RPL',
                'borrower_role' => 'Siswa',
                'borrow_date' => now(),
                'return_date' => now(),
                'duration_hours' => 4,
                'quantity' => 1,
                'purpose' => 'Dokumentasi kegiatan proyek ekstrakurikuler sekolah',
                'is_outside_class_hours' => true,
                'status' => 'disetujui',
                'approved_by' => 'Pak Fajar (Laboran)',
                'approved_at' => now()->subHours(2),
                'notes' => 'Telah diverifikasi persetujuan luar jam pelajaran',
            ]
        );

        Borrowing::firstOrCreate(
            ['borrowing_code' => 'BRW-20261108-003'],
            [
                'inventory_id' => $proyektor->id,
                'borrower_name' => 'Budi Santoso',
                'borrower_class' => 'XI-TKJ 2',
                'borrower_role' => 'Siswa',
                'borrow_date' => now()->subDay(),
                'return_date' => now()->subDay(),
                'duration_hours' => 2,
                'quantity' => 1,
                'purpose' => 'Presentasi tugas akhir kelompok',
                'is_outside_class_hours' => false,
                'status' => 'selesai',
                'approved_by' => 'Pak Fajar (Laboran)',
                'approved_at' => now()->subDay()->setTime(8, 0),
                'returned_at' => now()->subDay()->setTime(15, 30),
                'notes' => 'Barang dikembalikan dalam kondisi baik dan lengkap',
            ]
        );

        // 4. Activity Notifications (seperti di widget mock-up)
        $activities = [
            [
                'type' => 'pengajuan',
                'title' => 'Pengajuan peminjaman baru dari Andi Pratama',
                'subtitle' => 'Laptop Asus Core i7 • 3 Jam',
                'status_badge' => 'Menunggu',
                'badge_variant' => 'warning',
                'time_ago' => 'Hari ini, 09.20',
            ],
            [
                'type' => 'persetujuan',
                'title' => 'Peminjaman disetujui oleh Pak Fajar',
                'subtitle' => 'Kamera DSLR Canon EOS • Keysya (X1-RPL)',
                'status_badge' => 'Disetujui',
                'badge_variant' => 'success',
                'time_ago' => 'Hari ini, 08.50',
            ],
            [
                'type' => 'pengembalian',
                'title' => 'Pengembalian alat: Proyektor',
                'subtitle' => 'Dikembalikan tepat waktu oleh Budi Santoso',
                'status_badge' => 'Selesai',
                'badge_variant' => 'info',
                'time_ago' => 'Kemarin, 15.30',
            ],
            [
                'type' => 'stok_menipis',
                'title' => 'Peringatan: Stok Kamera DSLR sisa 2 unit',
                'subtitle' => 'Segera lakukan pengecekan fisik inventaris lab',
                'status_badge' => 'Perhatian',
                'badge_variant' => 'danger',
                'time_ago' => 'Kemarin, 11.00',
            ],
        ];

        foreach ($activities as $act) {
            ActivityNotification::create($act);
        }
    }
}
