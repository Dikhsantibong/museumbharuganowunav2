<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();

            // tipe: anggota / non_anggota / rombongan
            $table->enum('tipe_pengunjung', ['anggota', 'non_anggota', 'rombongan']);

            // data umum
            $table->string('nama_pengunjung')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('alamat')->nullable();

            // hanya untuk ROMBONGAN
            $table->string('institusi')->nullable();
            $table->integer('jumlah_anggota')->nullable();
            $table->string('nama_ketua')->nullable();

            // hanya untuk ANGGOTA
            $table->unsignedBigInteger('id_anggota')->nullable();

            // waktu kunjungan otomatis
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengunjungs');
    }
};
