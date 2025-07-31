@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Edit Peminjaman</h1>

    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST" class="bg-gray-900 p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 text-white">Nama Anggota</label>
            <select name="anggota_id" class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
                @foreach($anggotas as $anggota)
                    <option value="{{ $anggota->id }}" {{ $peminjaman->anggota_id == $anggota->id ? 'selected' : '' }}>
                        {{ $anggota->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-white">Judul Buku</label>
            <select name="buku_id" class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
                @foreach($bukus as $buku)
                    <option value="{{ $buku->id }}" {{ $peminjaman->buku_id == $buku->id ? 'selected' : '' }}>
                        {{ $buku->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-white">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" value="{{ $peminjaman->tanggal_pinjam }}"
                class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-white">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" value="{{ $peminjaman->tanggal_kembali }}"
                class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('peminjaman.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection
