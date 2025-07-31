@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 text-white">
    <h1 class="text-2xl font-bold mb-4">Data Anggota</h1>

    <a href="{{ route('anggota.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Anggota</a>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-3">{{ session('success') }}</div>
    @endif

    <table class="w-full border border-gray-700">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-2 border border-gray-700">Nama</th>
                <th class="p-2 border border-gray-700">Email</th>
                <th class="p-2 border border-gray-700">Alamat</th>
                <th class="p-2 border border-gray-700">Telepon</th>
                <th class="p-2 border border-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $anggota)
            <tr class="bg-gray-900 hover:bg-gray-800">
                <td class="p-2 border border-gray-700 text-white">{{ $anggota->nama }}</td>
                <td class="p-2 border border-gray-700 text-white">{{ $anggota->email }}</td>
                <td class="p-2 border border-gray-700 text-white">{{ $anggota->alamat }}</td>
                <td class="p-2 border border-gray-700 text-white">{{ $anggota->telepon }}</td>
                <td class="p-2 border border-gray-700 text-white flex gap-2">
                    <a href="{{ route('anggota.edit', $anggota) }}" class="text-blue-400 hover:underline">Edit</a>
                <form action="{{ route('anggota.destroy', $anggota) }}" method="POST" onsubmit="return confirm('Hapus anggota ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Hapus</button>
                </form>
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
