@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Halo, {{ Auth::user()->name }} 👋</h1>

    <p class="mb-6 text-gray-300">Selamat datang di sistem Perpustakaan Digital.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="{{ route('buku.index') }}"
           class="block bg-blue-700 hover:bg-blue-800 p-6 rounded-lg text-white font-semibold text-center">
            📚 Manajemen Buku
        </a>

        <a href="{{ route('anggota.index') }}"
           class="block bg-green-700 hover:bg-green-800 p-6 rounded-lg text-white font-semibold text-center">
            👤 Manajemen Anggota
        </a>

        <a href="{{ route('peminjaman.index') }}"
           class="block bg-yellow-600 hover:bg-yellow-700 p-6 rounded-lg text-white font-semibold text-center">
            🔁 Data Peminjaman
        </a>

        <a href="{{ route('pengembalian.index') }}" 
           class="block bg-purple-700 hover:bg-purple-800 p-6 rounded-lg text-white font-semibold text-center">
            🔄 Data Pengembalian
        </a>

        <a href="{{ route('kategori.index') }}"
           class="block bg-red-700 hover:bg-red-800 p-6 rounded-lg text-white font-semibold text-center">
            🏷️ Kategori Buku
        </a>
    </div>
</div>
@endsection
