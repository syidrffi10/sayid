@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Edit Buku</h1>

    <form action="{{ route('buku.update', $buku) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}" class="w-full px-4 py-2 bg-gray-800 text-white rounded">
        </div>

        <div>
            <label class="block mb-1">Penulis</label>
            <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" class="w-full px-4 py-2 bg-gray-800 text-white rounded">
        </div>

        <div>
            <label class="block mb-1">Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" class="w-full px-4 py-2 bg-gray-800 text-white rounded">
        </div>

        <div>
            <label class="block mb-1">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" class="w-full px-4 py-2 bg-gray-800 text-white rounded">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('buku.index') }}" class="text-purple-400">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection
