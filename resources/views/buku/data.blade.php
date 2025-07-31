@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Data Buku</h1>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 border">Judul</th>
                <th class="p-2 border">Penulis</th>
                <th class="p-2 border">Penerbit</th>
                <th class="p-2 border">Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukus as $buku)
            <tr>
                <td class="p-2 border text-white">{{ $buku->judul }}</td>
                <td class="p-2 border text-white">{{ $buku->penulis }}</td>
                <td class="p-2 border text-white">{{ $buku->penerbit }}</td>
                <td class="p-2 border text-white">{{ $buku->tahun_terbit }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
