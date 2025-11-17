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
        Schema::create('komentar_beritas', function (Blueprint $table) {
            $table->id('id_komentar');
            $table->unsignedBigInteger('id_berita');
            $table->string('nama', 100);
            $table->string('email', 150)->nullable();
            $table->text('komentar');
            $table->timestamps();

            $table->foreign('id_berita')
                ->references('id_berita')->on('beritas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_beritas');
    }
};
