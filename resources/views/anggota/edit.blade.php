@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Edit Anggota</h1>

    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST" class="bg-gray-900 p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $anggota->nama) }}"
                class="w-full border border-gray-600 p-2 rounded bg-gray-800 text-white focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $anggota->email) }}"
                class="w-full border border-gray-600 p-2 rounded bg-gray-800 text-white focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat', $anggota->alamat) }}"
                class="w-full border border-gray-600 p-2 rounded bg-gray-800 text-white focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Telepon</label>
            <input type="text" name="telepon" value="{{ old('telepon', $anggota->telepon) }}"
                class="w-full border border-gray-600 p-2 rounded bg-gray-800 text-white focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white">Simpan</button>
            <a href="{{ route('anggota.index') }}" class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded text-white">Batal</a>
        </div>
    </form>
</div>
@endsection
