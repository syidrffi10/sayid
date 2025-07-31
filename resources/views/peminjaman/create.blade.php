@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Tambah Peminjaman</h1>

    {{-- Tampilkan pesan error validasi --}}
    @if ($errors->any())
        <div class="bg-red-600 p-3 rounded mb-4">
            <ul class="list-disc list-inside text-sm text-white">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peminjaman.store') }}" method="POST" class="bg-gray-900 p-6 rounded shadow-md">
        @csrf

        {{-- Anggota --}}
        <div class="mb-4">
            <label class="block mb-1 text-white">Nama Anggota</label>
            <select name="anggota_id" required class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
                <option disabled selected>-- Pilih Anggota --</option>
                @foreach($anggotas as $anggota)
                    <option value="{{ $anggota->id }}" {{ old('anggota_id') == $anggota->id ? 'selected' : '' }}>
                        {{ $anggota->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Buku --}}
        <div class="mb-4">
            <label class="block mb-1 text-white">Judul Buku</label>
            <select name="buku_id" required class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
                <option disabled selected>-- Pilih Buku --</option>
                @foreach($bukus as $buku)
                    <option value="{{ $buku->id }}" {{ old('buku_id') == $buku->id ? 'selected' : '' }}>
                        {{ $buku->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tanggal Pinjam --}}
        <div class="mb-4">
            <label class="block mb-1 text-white">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}"
                class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
        </div>

        {{-- Tanggal Kembali --}}
        <div class="mb-4">
            <label class="block mb-1 text-white">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}"
                class="w-full border border-gray-700 p-2 rounded bg-gray-800 text-white">
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('peminjaman.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection
