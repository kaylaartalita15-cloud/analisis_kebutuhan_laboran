<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('riwayat');
});

Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat');
