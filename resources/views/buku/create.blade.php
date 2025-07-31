@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10">
    <h2 class="text-2xl font-bold text-white mb-4">Tambah Buku</h2>

    <form action="{{ route('buku.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-white">Judul</label>
            <input type="text" name="judul" class="w-full bg-gray-800 text-white border border-gray-600 rounded px-3 py-2">
        </div>
        <div>
            <label class="block text-white">Penulis</label>
            <input type="text" name="penulis" class="w-full bg-gray-800 text-white border border-gray-600 rounded px-3 py-2">
        </div>
        <div>
            <label class="block text-white">Penerbit</label>
            <input type="text" name="penerbit" class="w-full bg-gray-800 text-white border border-gray-600 rounded px-3 py-2">
        </div>
        <div>
            <label class="block text-white">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="w-full bg-gray-800 text-white border border-gray-600 rounded px-3 py-2">
        </div>

    <div class="flex justify-end items-center gap-4 mt-4">
        <a href="{{ route('buku.index') }}" class="text-purple-400 hover:underline">Batal</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Simpan
        </button>
      </div>
    </form>
</div>
@endsection

