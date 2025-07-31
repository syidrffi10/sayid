@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h2 class="text-2xl font-semibold mb-4">📚 Data Buku (Read Only)</h2>
    <table class="table-auto w-full text-white border">
        <thead>
            <tr>
                <th class="border px-4 py-2">Judul</th>
                <th class="border px-4 py-2">Penulis</th>
                <th class="border px-4 py-2">Penerbit</th>
                <th class="border px-4 py-2">Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
                <tr>
                    <td class="border px-4 py-2">{{ $buku->judul }}</td>
                    <td class="border px-4 py-2">{{ $buku->penulis }}</td>
                    <td class="border px-4 py-2">{{ $buku->penerbit }}</td>
                    <td class="border px-4 py-2">{{ $buku->tahun_terbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

