<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white min-h-screen flex items-center justify-center px-4">
    <div class="text-center max-w-xl">
        <!-- Judul -->
        <h1 class="text-4xl font-extrabold mb-4 text-blue-400">Selamat Datang di Perpustakaan Digital</h1>

        <!-- Deskripsi -->
        <p class="text-lg text-gray-300 mb-6">
            Kelola data buku, anggota, serta peminjaman dan pengembalian dengan mudah dan efisien.
        </p>

        <!-- Tambahkan logo jika ada -->
        {{-- <img src="{{ asset('img/logo.png') }}" alt="Logo" class="mx-auto mb-6 w-24"> --}}

        <!-- Tombol Login/Register -->
        @if (Route::has('login'))
            <div class="flex justify-center space-x-4 mt-6">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="px-6 py-2 rounded-md bg-green-500 hover:bg-green-600 text-white font-semibold transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="px-6 py-2 rounded-md bg-blue-500 hover:bg-blue-600 text-white font-semibold transition">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-6 py-2 rounded-md bg-gray-300 hover:bg-gray-400 text-black font-semibold transition">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Footer -->
        <div class="mt-10 text-sm text-gray-500">
            &copy; {{ date('Y') }} Perpustakaan Digital.  Laravel
        </div>
    </div>
</body>
</html>
