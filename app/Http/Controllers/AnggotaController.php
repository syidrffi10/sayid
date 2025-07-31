<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:anggotas,email',
            'alamat' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
    ]);

    Anggota::create($validated);

    return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan!');
    }


    public function edit($id)
    {
    $anggota = Anggota::findOrFail($id);
    return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'alamat' => 'nullable|string',
        'telepon' => 'nullable|string',
    ]);

    $anggota = Anggota::findOrFail($id);
    $anggota->update($request->all());

    return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil diperbarui!');
    }

    public function destroy(Anggota $anggota)
    {
    $anggota->delete();
    return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil dihapus.');
    }


}
