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
        Schema::create('koleksis', function (Blueprint $table) {
            $table->id('id_koleksi');
            $table->string('nama_koleksi', 150);

            $table->year('tahun_pembuatan')->nullable();
            $table->string('tempat_perolehan', 150)->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('cara_perolehan', 150)->nullable();
            $table->string('jenis_koleksi', 100)->nullable();
            $table->text('uraian')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksis');
    }
};
