<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeminjamanController;

// Halaman utama (opsional bisa redirect ke dashboard kalau user login)
Route::get('/', function () {
    return view('welcome');
});

// 🔁 Data Buku (read-only)
Route::get('/data-buku', [DataBukuController::class, 'index'])->name('data-buku.index');

// 📚 Manajemen Buku (CRUD lengkap)
Route::resource('buku', BukuController::class)->middleware('auth');

// 👤 Manajemen Anggota (CRUD lengkap)
Route::resource('anggota', AnggotaController::class)->parameters([
    'anggota' => 'anggota'
]);

Route::resource('peminjaman', PeminjamanController::class)->middleware('auth');

Route::get('/pengembalian', [PeminjamanController::class, 'pengembalian'])->name('pengembalian.index');

Route::resource('kategori', KategoriBukuController::class)->middleware('auth');

// 🏠 Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 👤 Profile (opsional)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔐 Auth (login, register, dll)
require __DIR__.'/auth.php';
