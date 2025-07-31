@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Data Peminjaman</h1>

    <a href="{{ route('peminjaman.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Peminjaman</a>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-700">
       <thead class="bg-gray-800 text-white">
    <tr>
        <th class="p-2 border border-gray-700">Nama Anggota</th>
        <th class="p-2 border border-gray-700">Judul Buku</th>
        <th class="p-2 border border-gray-700">Tanggal Pinjam</th>
        <th class="p-2 border border-gray-700">Tanggal Kembali</th>
        <th class="p-2 border border-gray-700">Aksi</th> <!-- Tambahkan ini -->
    </tr>
</thead>
<tbody>
    @foreach ($peminjamans as $p)
        <tr class="bg-gray-900 hover:bg-gray-800">
            <td class="p-2 border border-gray-700">{{ $p->anggota->nama }}</td>
            <td class="p-2 border border-gray-700">{{ $p->buku->judul }}</td>
            <td class="p-2 border border-gray-700">{{ $p->tanggal_pinjam }}</td>
            <td class="p-2 border border-gray-700">{{ $p->tanggal_kembali ?? '-' }}</td>
            <td class="p-2 border border-gray-700 flex gap-2">
                <a href="{{ route('peminjaman.edit', $p->id) }}" class="text-yellow-400 hover:underline">Edit</a>
                <form action="{{ route('peminjaman.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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
