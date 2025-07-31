<?php
namespace App\Http\Controllers;

use App\Models\Buku;

class DataBukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('data_buku.index', compact('bukus'));
    }
}
