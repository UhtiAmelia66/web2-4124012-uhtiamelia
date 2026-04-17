@extends('layouts.app')

@section('content')

<section class="bg-white rounded-3xl shadow-md p-10 text-center">

    <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-4">
        Selamat Datang di FoodMarket 🍽
    </h1>

    <p class="text-slate-600 max-w-2xl mx-auto mb-6">
        Website pemesanan makanan sederhana menggunakan Laravel dan Tailwind CSS.
        Pilih menu favorit kamu dan nikmati tampilan modern.
    </p>

    <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ route('produk.index') }}"
           class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition">
            Lihat Produk
        </a>

        <a href="{{ route('tentang') }}"
           class="bg-yellow-400 text-blue-900 px-6 py-3 rounded-lg hover:bg-yellow-300 transition font-semibold">
            Tentang Kami
        </a>
    </div>

</section>

@endsection