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
        Schema::create('foto_koleksi', function (Blueprint $table) {
            $table->id('id_foto');
            $table->unsignedBigInteger('id_koleksi');

            $table->string('foto', 255);
            $table->string('sumber', 255)->nullable();

            $table->timestamps();

            $table->foreign('id_koleksi')
                ->references('id_koleksi')->on('koleksis')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_koleksi');
    }
};
