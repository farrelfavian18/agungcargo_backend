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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karir_id')->constrained('karirs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('foto_karyawan');
            $table->string('email');
            $table->string('alamat');
            $table->string('no_telpon');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Katholik','Kristen','Hindu','Buddha','Kong Hu Chu']);
            $table->date('tgl_lahir')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->enum('status_hubungan',['menikah', 'belum menikah'])->nullable();
            $table->string('no_ktp');
            $table->string('pendidikan')->nullable();
            $table->string('pengalaman_kerja')->nullable();
            $table->string('cv');
            $table->string('ijazah');
            $table->enum('status_lamaran', ['Diproses', 'Diterima', 'Ditolak'])->default('Diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
