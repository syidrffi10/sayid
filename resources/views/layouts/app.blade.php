<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-900 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-lg font-bold text-blue-400">Perpustakaan Digital</a>

            <div class="space-x-4">
                <a href="{{ url('/dashboard') }}" class="hover:underline">Dashboard</a>
                <a href="{{ route('buku.index') }}" class="hover:underline">Data Buku</a>

                @auth
                    <span class="text-gray-300">| {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-400 hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="hover:underline">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main class="py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center text-gray-500 text-sm pb-4">
        &copy; {{ date('Y') }} Perpustakaan Digital. Laravel + Tailwind.
    </footer>

</body>
</html>
