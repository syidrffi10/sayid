@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Daftar Kategori Buku</h1>

    <a href="{{ route('kategori.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Kategori</a>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-700">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-2 border border-gray-700">Nama Kategori</th>
                <th class="p-2 border border-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
                <tr class="bg-gray-900 hover:bg-gray-800">
                    <td class="p-2 border border-gray-700">{{ $kategori->nama_kategori }}</td>
                    <td class="p-2 border border-gray-700 space-x-2">
                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="text-yellow-400 hover:underline">Edit</a>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
