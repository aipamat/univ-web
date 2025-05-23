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
        Schema::create('testimoni_alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->text('deskripsi');
            $table->foreignId('id_fakultas')
                  ->constrained('fakultas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade')
                  ->nullable();
            $table->foreignId('id_prodi')
                  ->constrained('program_studis')
                  ->onDelete('cascade')
                  ->onUpdate('cascade')
                  ->nullable();
            $table->year('angkatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimoni_alumnis');
    }
};
