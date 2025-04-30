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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id(); //primary key auto-incrementing, bigint
            $table->string('nama_fakultas', 50); 
            $table->string('singkatan', 5); 
            $table->string('dekan', 30);
            $table->string('wakil_dekan', 30);
            $table->timestamps(); //created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
