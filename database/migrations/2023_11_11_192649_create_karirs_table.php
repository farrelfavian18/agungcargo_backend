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
        Schema::create('karirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jabatan');
            $table->string('lokasi');
            $table->string('kualifikasi');
            $table->string('deskripsi_lowongan');
            $table->string('kategori_pekerjaan');
            $table->enum('status_loker',['Aktif','Non-aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karirs');
    }
};
