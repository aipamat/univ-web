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
        Schema::table('pimpinans', function (Blueprint $table) {
            $table->enum('program_studi', ['Rektor', 'Wakil Rektor', 'Dekan', 'Kepala Prodi'])->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pimpinans', function (Blueprint $table) {
            $table->dropColumn('program_studi');
        });
    }
};
