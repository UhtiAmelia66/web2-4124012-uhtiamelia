@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-blue-900 text-white rounded-3xl p-10 mb-10">
    <h1 class="text-4xl font-bold mb-4">
        Tentang FoodMarket
    </h1>
    <p class="text-blue-100 text-lg max-w-2xl">
        FoodMarket adalah website sederhana untuk menampilkan dan memesan makanan
        dengan tampilan modern menggunakan Laravel dan Tailwind CSS.
    </p>
</section>

<!-- CARD -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-2xl shadow-md">
        <h2 class="text-xl font-bold text-blue-900 mb-3">Cepat</h2>
        <p class="text-slate-600">
            Akses menu makanan dengan cepat dan mudah.
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-md">
        <h2 class="text-xl font-bold text-blue-900 mb-3">Modern</h2>
        <p class="text-slate-600">
            Desain menggunakan Tailwind CSS agar tampilan lebih menarik.
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-md">
        <h2 class="text-xl font-bold text-blue-900 mb-3">Responsif</h2>
        <p class="text-slate-600">
            Tampilan tetap rapi di mobile maupun desktop.
        </p>
    </div>

</section>

@endsection