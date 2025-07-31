<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id');
            $table->unsignedBigInteger('buku_id');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->timestamps();

            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
            $table->foreign('buku_id')->references('id')->on('bukus')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};

