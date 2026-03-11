<!DOCTYPE html>
<html>
<head>
    <title>Profil Mahasiswa</title>
</head>
<body>

<h1>Profil Mahasiswa</h1>

@foreach($data as $mhs)

<p>Nama : {{ $mhs['nama'] }}</p>
<p>NIM : {{ $mhs['nim'] }}</p>
<p>Prodi : {{ $mhs['prodi'] }}</p>
<p>Semester : {{ $mhs['semester'] }}</p>

<p>Keahlian :</p>
<ul>
    @foreach($mhs['keahlian'] as $skill)
        <li>{{ $skill }}</li>
    @endforeach
</ul>

<hr>

@endforeach

</body>
</html>