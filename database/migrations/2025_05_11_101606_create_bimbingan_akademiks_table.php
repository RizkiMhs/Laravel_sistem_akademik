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
        Schema::create('bimbingan_akademiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')
                ->constrained('mahasiswas')
                ->onDelete('cascade');
            $table->foreignId('dosen_id')
                ->constrained('dosens')
                ->onDelete('cascade');
            $table->date('tanggal_bimbingan');
            $table->string('topik_bimbingan');
            $table->text('catatan');
            $table->enum('status', ['terjadwal', 'selesai', 'dibatalkan']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bimbingan_akademiks');
    }
};
