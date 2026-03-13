<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

// ======================
// HALAMAN UTAMA
// ======================
Route::get('/', function () {
    return view('welcome');
});

// ======================
// ROUTE STATIS PERKENALAN
// ======================
Route::get('/perkenalan', function () {
    return "<h1>Halo! Nama saya Uhti Amelia</h1>
            <p>NIM: 4124012 | Prodi: Sistem Informasi</p>";
});

Route::get('/perkenalan-yazka', function () {
    return "<h1>Halo! Nama saya Yazka Dzahaa Dzakiyah</h1>
            <p>NIM: 4124013 | Prodi: Sistem Informasi</p>";
});

Route::get('/perkenalan-yanis', function () {
    return "<h1>Halo! Nama saya Yanis Kamil Fikri</h1>
            <p>NIM: 4122004 | Prodi: Sistem Informasi</p>";
});

Route::get('/menu', function () {
    return "<h2>Menu Pemesanan Makanan</h2>";
})->name('menu.index');

Route::get('/kontak', function () {
    return "<h2>Kontak Restoran</h2>";
})->name('kontak.index');

// ======================
// ROUTE PROFIL DINAMIS
// ======================
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

// ======================
// ROUTE KATALOG
// ======================
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');