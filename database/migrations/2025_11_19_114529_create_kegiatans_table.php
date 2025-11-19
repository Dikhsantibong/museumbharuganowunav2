<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id('id_kegiatan');

            // Judul kegiatan
            $table->string('judul', 255);

            // Slug untuk SEO
            $table->string('slug')->unique();

            // Deskripsi kegiatan
            $table->text('deskripsi')->nullable();

            // Thumbnail cover
            $table->string('thumbnail')->nullable();

            // Tempat kegiatan
            $table->string('lokasi')->nullable();

            // Tanggal kegiatan berlangsung
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();

            // Status (Draft / Publish)
            $table->enum('status', ['Draft', 'Publish'])->default('Draft');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
