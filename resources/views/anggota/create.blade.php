@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-6">Tambah Anggota</h1>

    {{-- Pesan Error --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('anggota.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1" for="nama">Nama</label>
            <input type="text" name="nama" id="nama"
                value="{{ old('nama') }}"
                class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-white" required>
        </div>

        <div>
            <label class="block mb-1" for="email">Email</label>
            <input type="email" name="email" id="email"
                value="{{ old('email') }}"
                class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-white" required>
        </div>

        <div>
            <label class="block mb-1" for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat"
                value="{{ old('alamat') }}"
                class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-white">
        </div>

        <div>
            <label class="block mb-1" for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon"
                value="{{ old('telepon') }}"
                class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-white">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('anggota.index') }}" class="text-purple-400">Batal</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white">Simpan</button>
        </div>
    </form>
</div>
@endsection
