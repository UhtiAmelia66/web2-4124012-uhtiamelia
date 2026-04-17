@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto bg-white shadow-md rounded-2xl p-8">

    <h1 class="text-3xl font-bold text-blue-900 mb-2">
        Tambah Menu Makanan
    </h1>

    <p class="text-slate-600 mb-6">
        Silakan isi form untuk menambahkan menu baru.
    </p>

    <form action="{{ route('produk.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Nama -->
        <div>
            <label class="block font-medium mb-2">Nama Makanan</label>
            <input
                type="text"
                name="nama"
                value="{{ old('nama') }}"
                class="w-full border rounded-lg px-4 py-3 @error('nama') border-red-500 @else border-slate-300 @enderror"
                placeholder="Contoh: Nasi Goreng"
            >
            @error('nama')
                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Harga -->
        <div>
            <label class="block font-medium mb-2">Harga</label>
            <input
                type="text"
                name="harga"
                value="{{ old('harga') }}"
                class="w-full border rounded-lg px-4 py-3 @error('harga') border-red-500 @else border-slate-300 @enderror"
                placeholder="Contoh: Rp15.000"
            >
            @error('harga')
                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block font-medium mb-2">Deskripsi</label>
            <textarea
                name="deskripsi"
                rows="4"
                class="w-full border rounded-lg px-4 py-3 @error('deskripsi') border-red-500 @else border-slate-300 @enderror"
                placeholder="Masukkan deskripsi makanan"
            >{{ old('deskripsi') }}</textarea>

            @error('deskripsi')
                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Button -->
        <button
            type="submit"
            class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-semibold">
            Simpan
        </button>

    </form>

</div>

@endsection