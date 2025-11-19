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
        Schema::create('kegiatan_fotos', function (Blueprint $table) {
            $table->id('id_foto');
            $table->unsignedBigInteger('id_kegiatan');
            $table->string('foto'); // path foto
            $table->string('caption')->nullable();
            $table->timestamps();

            $table->foreign('id_kegiatan')
                ->references('id_kegiatan')->on('kegiatans')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan_fotos');
    }
};
