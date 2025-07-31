@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Edit Kategori Buku</h1>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1">Nama Kategori</label>
            <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" class="w-full p-2 bg-gray-800 border border-gray-600 rounded" required>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('kategori.index') }}" class="text-purple-400">Batal</a>
            <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 px-4 py-2 rounded text-white">Update</button>
        </div>
    </form>
</div>
@endsection
