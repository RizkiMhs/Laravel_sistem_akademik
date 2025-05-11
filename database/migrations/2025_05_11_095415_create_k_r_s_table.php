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
        Schema::create('k_r_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')
                ->constrained('mahasiswas')
                ->onDelete('cascade');
            $table->foreignId('jadwal_id')
                ->constrained('jadwal_mata_kuliahs')
                ->onDelete('cascade');
            $table->integer('sks');
            $table->integer('semester');
            $table->year('tahun_akademik');
            $table->enum('status_krs', ['diajukan', 'setujui', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_r_s');
    }
};
