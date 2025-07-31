<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() {
        $peminjamans = Peminjaman::with('anggota', 'buku')->get();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function create() {
        $anggotas = Anggota::all();
        $bukus = Buku::all();
        return view('peminjaman.create', compact('anggotas', 'bukus'));
    }

   public function store(Request $request)
    {
    // Validasi data
    $validated = $request->validate([
        'anggota_id' => 'required|exists:anggotas,id',
        'buku_id' => 'required|exists:bukus,id',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
    ]);

    // Simpan ke database
    Peminjaman::create($validated);

    // Redirect ke halaman daftar peminjaman
    return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan!');
    }


    public function edit($id)
    {
    $peminjaman = Peminjaman::findOrFail($id);
    $anggotas = Anggota::all();
    $bukus = Buku::all();
    return view('peminjaman.edit', compact('peminjaman', 'anggotas', 'bukus'));
    }

    public function update(Request $request, $id)
    {
    $validated = $request->validate([
        'anggota_id' => 'required|exists:anggotas,id',
        'buku_id' => 'required|exists:bukus,id',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
    ]);

    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->update($validated);

    return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil diperbarui!');
    }

    public function destroy($id)
    {
    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->delete();

    return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil dihapus.');
    }

    public function pengembalian()
    {
    $pengembalians = Peminjaman::with('anggota', 'buku')
        ->whereNotNull('tanggal_kembali')
        ->get();

    return view('peminjaman.pengembalian', compact('pengembalians'));
    }


}
