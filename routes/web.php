<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produk', function () {
    $produks = [
        [
            'id' => 1,
            'nama' => 'Nasi Goreng',
            'harga' => 'Rp18.000',
            'deskripsi' => 'Nasi goreng enak dengan rasa gurih dan lezat.'
        ],
        [
            'id' => 2,
            'nama' => 'Mie Ayam',
            'harga' => 'Rp15.000',
            'deskripsi' => 'Mie ayam gurih dengan topping ayam yang nikmat.'
        ],
        [
            'id' => 3,
            'nama' => 'Sate Ayam',
            'harga' => 'Rp20.000',
            'deskripsi' => 'Sate ayam dengan bumbu kacang yang khas.'
        ],
        [
            'id' => 4,
            'nama' => 'Bakso',
            'harga' => 'Rp17.000',
            'deskripsi' => 'Bakso kenyal dengan kuah hangat dan segar.'
        ],
        [
            'id' => 5,
            'nama' => 'Ayam Geprek',
            'harga' => 'Rp16.000',
            'deskripsi' => 'Ayam geprek pedas mantap dengan sambal nikmat.'
        ],
        [
            'id' => 6,
            'nama' => 'Soto Ayam',
            'harga' => 'Rp14.000',
            'deskripsi' => 'Soto ayam dengan kuah hangat dan lezat.'
        ],
    ];

    return view('produk.index', compact('produks'));
})->name('produk.index');

Route::get('/produk/create', function () {
    return view('produk.create');
})->name('produk.create');

Route::post('/produk', function (Request $request) {
    $request->validate([
        'nama' => 'required|min:3',
        'harga' => 'required|min:3',
        'deskripsi' => 'required|min:10',
    ]);

    return redirect()
        ->route('produk.index')
        ->with('success', 'Produk berhasil ditambahkan.');
})->name('produk.store');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');