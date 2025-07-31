@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Daftar Buku</h1>

    <a href="{{ route('buku.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Buku</a>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full text-sm text-left text-white border border-gray-700">
        <thead class="bg-gray-800">
            <tr>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Penulis</th>
                <th class="px-4 py-2">Penerbit</th>
                <th class="px-4 py-2">Tahun</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-gray-900">
            @foreach($bukus as $buku)
            <tr class="border-t border-gray-700">
                <td class="px-4 py-2">{{ $buku->judul }}</td>
                <td class="px-4 py-2">{{ $buku->penulis }}</td>
                <td class="px-4 py-2">{{ $buku->penerbit }}</td>
                <td class="px-4 py-2">{{ $buku->tahun_terbit }}</td>
                <td class="px-4 py-2 flex space-x-2">
                    <a href="{{ route('buku.edit', $buku) }}" class="text-blue-400 hover:underline">Edit</a>
                    <form action="{{ route('buku.destroy', $buku) }}" method="POST" onsubmit="return confirm('Hapus buku ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-400 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
