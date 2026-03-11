<!DOCTYPE html>
<html>
<head>
<title>Katalog Makanan</title>
</head>
<body>

<h1>Katalog Menu Makanan</h1>

<table border="1">
<tr>
<th>ID</th>
<th>Nama</th>
<th>Harga</th>
<th>Detail</th>
</tr>

@foreach($produk as $p)
<tr>
<td>{{ $p['id'] }}</td>
<td>{{ $p['nama'] }}</td>
<td>Rp {{ $p['harga'] }}</td>
<td>
<a href="{{ route('katalog.show', $p['id']) }}">
Lihat Detail
</a>
</td>
</tr>
@endforeach

</table>

</body>
</html>