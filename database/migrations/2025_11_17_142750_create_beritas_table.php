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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('id_berita');
            $table->unsignedBigInteger('id_kategori');
            $table->string('judul', 255);
            $table->string('slug')->unique();
            $table->text('konten');
            $table->string('thumbnail')->nullable(); // cover berita
            $table->date('tanggal_publikasi')->nullable();
            $table->enum('status', ['draft', 'publish'])->default('draft');
            $table->timestamps();

            $table->foreign('id_kategori')
                ->references('id_kategori')->on('kategori_beritas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
