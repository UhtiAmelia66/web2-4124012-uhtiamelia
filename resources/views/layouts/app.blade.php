<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Project Laravel Minggu 4' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="bg-blue-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-xl font-bold">
                <span class="bg-yellow-400 text-blue-900 px-2 py-1 rounded-lg">🍽</span>
                <span>FoodMarket</span>
            </a>

            <div class="flex flex-col md:flex-row gap-3 md:gap-6">
                <a href="{{ route('home') }}" class="hover:text-yellow-300">Home</a>
                <a href="{{ route('produk.index') }}" class="hover:text-yellow-300">Produk</a>
                <a href="{{ route('produk.create') }}" class="hover:text-yellow-300">Tambah Produk</a>
                <a href="{{ route('tentang') }}" class="hover:text-yellow-300">Tentang</a>

                <a href="{{ route('produk.create') }}"
                   class="bg-yellow-400 text-blue-900 px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">
                    Tambah Menu
                </a>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-4 py-8">
            @include('partials.alert')
            @yield('content')
        </div>
    </main>

    <!-- FOOTER (SUDAH DIRAPIKAN) -->
    <footer class="bg-blue-900 text-white mt-10">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center">
            <p>&copy; {{ date('Y') }} FoodMarket.BY Kelompok 5.</p>
        </div>
    </footer>

</body>
</html>