<?php

use App\Models\Inventory;
use Database\Seeders\SilabDatabaseSeeder;

test('dashboard returns a successful response with silab indicators', function () {
    $this->seed(SilabDatabaseSeeder::class);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('SI-LAB');
    $response->assertSee('Total Inventaris');
    $response->assertSee('Peminjaman Aktif');
    $response->assertSee('Stok Menipis');
    $response->assertSee('Ringkasan Peminjaman');
    $response->assertSee('Inventaris Terpopuler');
});

test('can submit borrowing request with valid H-1 date', function () {
    $this->seed(SilabDatabaseSeeder::class);
    $inventory = Inventory::first();

    $response = $this->post(route('borrowing.store'), [
        'inventory_id' => $inventory->id,
        'borrower_name' => 'Kayla Test',
        'borrower_class' => 'X1-RPL',
        'borrow_date' => now()->addDays(2)->format('Y-m-d'), // H-1 valid
        'duration_hours' => 2,
        'quantity' => 1,
        'purpose' => 'Uji Coba Peminjaman Lab',
    ]);

    $response->assertSessionHas('success');
    $this->assertDatabaseHas('borrowings', [
        'borrower_name' => 'Kayla Test',
        'status' => 'menunggu',
    ]);
});
