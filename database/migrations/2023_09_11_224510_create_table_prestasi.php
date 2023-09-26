<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 200)->default('default.png');
            $table->string('nama_lomba', 100)->nullable();
            $table->string('bidang_lomba', 60)->nullable();
            $table->string('juara', 60)->nullable();
            $table->text('ket')->nullable();
            $table->timestamps();
 });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
