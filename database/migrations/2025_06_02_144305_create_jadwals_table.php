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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik', 10);
            $table->string('kode_smt', 10);
            $table->string('kelas', 10);
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliah')->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreignId('dosen_id')->constrained('users')->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreignId('sesi_id')->constrained('sesi')->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
