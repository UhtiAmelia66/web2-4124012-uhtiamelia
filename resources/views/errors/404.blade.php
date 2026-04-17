@extends('layouts.app')

@section('content')

<div class="min-h-[60vh] flex items-center justify-center">
    <div class="bg-white rounded-3xl shadow-lg p-10 text-center max-w-xl">

        <h1 class="text-6xl font-extrabold text-blue-900 mb-4">
            404
        </h1>

        <h2 class="text-2xl font-bold mb-3">
            Halaman Tidak Ditemukan
        </h2>

        <p class="text-slate-600 mb-6">
            Maaf, halaman yang kamu cari tidak tersedia.
        </p>

        <a href="{{ route('home') }}"
           class="bg-yellow-400 text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300">
            Kembali ke Home
        </a>

    </div>
</div>

@endsection