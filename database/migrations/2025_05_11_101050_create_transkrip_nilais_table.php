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
        Schema::create('transkrip_nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('khs_id')
                ->constrained('k_h_s')
                ->onDelete('cascade');
            $table->foreignId('mata_kuliah_id')
                ->constrained('mata_kuliahs')
                ->onDelete('cascade');
            $table->decimal('nilai_akhir', 4, 2);
            $table->enum('grade', ['A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D', 'E']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkrip_nilais');
    }
};
