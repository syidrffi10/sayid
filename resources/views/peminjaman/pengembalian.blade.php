@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Data Pengembalian</h1>

    <table class="w-full border border-gray-700">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-2 border border-gray-700">Nama Anggota</th>
                <th class="p-2 border border-gray-700">Judul Buku</th>
                <th class="p-2 border border-gray-700">Tanggal Pinjam</th>
                <th class="p-2 border border-gray-700">Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengembalians as $p)
                <tr class="bg-gray-900 hover:bg-gray-800">
                    <td class="p-2 border border-gray-700">{{ $p->anggota->nama }}</td>
                    <td class="p-2 border border-gray-700">{{ $p->buku->judul }}</td>
                    <td class="p-2 border border-gray-700">{{ $p->tanggal_pinjam }}</td>
                    <td class="p-2 border border-gray-700">{{ $p->tanggal_kembali }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center p-4 text-gray-400">Belum ada pengembalian</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
