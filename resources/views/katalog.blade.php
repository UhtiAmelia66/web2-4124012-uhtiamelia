<!-- resources/views/katalog.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        a {
            color: blue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ url('/katalog/'.$item['id']) }}">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>