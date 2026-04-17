@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-blue-900 mb-4">
    Profil Pemesan
</h1>

<p class="mb-6 text-slate-600">
    Informasi data pemesan atau mahasiswa.
</p>

@foreach($data as $mhs)
    <div class="mb-6 p-4 bg-white rounded-lg shadow-sm">
        <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>
        <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>
        <p><strong>Prodi:</strong> {{ $mhs['prodi'] }}</p>
        <p><strong>Semester:</strong> {{ $mhs['semester'] }}</p>

        <p class="mt-2"><strong>Keahlian:</strong></p>
        <ul class="list-disc list-inside">
            @foreach($mhs['keahlian'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
@endforeach

@endsection