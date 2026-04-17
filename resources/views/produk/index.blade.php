@extends('layouts.app')

@section('content')

<div class="mb-8">
    <h1 class="text-3xl font-bold text-blue-900">Katalog Menu Makanan</h1>
    <p class="text-slate-600 mt-2">Pilih menu makanan favorit yang tersedia hari ini.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($produks as $p)
        <div class="bg-white rounded-2xl shadow-md border border-slate-100 p-6 hover:shadow-lg transition">

            <div class="w-full h-40 bg-slate-200 rounded-xl mb-4 flex items-center justify-center text-slate-500">
                Menu Makanan
            </div>

            <h2 class="text-xl font-bold text-slate-800">
                {{ $p['nama'] }}
            </h2>

            <p class="text-blue-900 font-semibold mt-2">
                {{ $p['harga'] }}
            </p>

            <p class="text-slate-600 mt-3">
                {{ $p['deskripsi'] }}
            </p>

            <div class="mt-5">
                <a href="{{ route('produk.create') }}"
                   class="inline-block bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">
                    Pesan / Tambah
                </a>
            </div>

        </div>
    @endforeach
</div>

@endsection