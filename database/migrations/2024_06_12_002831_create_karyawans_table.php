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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('nama')->nullable();
            $table->string('foto_karyawan');
            $table->string('divisi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('email');
            $table->string('alamat');
            $table->string('no_telpon');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Katholik','Kristen','Hindu','Buddha','Kong Hu Chu']);
            $table->date('tgl_lahir')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->enum('status_hubungan',['menikah', 'belum menikah']);
            $table->string('no_ktp');
            $table->string('pendidikan');
            $table->string('no_rekening')->nullable();
            $table->enum('status_karyawan', ['Aktif', 'Non-Aktif'])->default('Aktif')->nullable();
            $table->timestamps();

            // old database
            // $table->id();
            // $table->unsignedBigInteger('users_id')->nullable();
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('nama');
            // $table->string('foto_karyawan')->nullable();
            // $table->string('email')->nullable();
            // $table->string('alamat')->nullable();
            // $table->string('no_telpon')->nullable();
            // $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            // $table->enum('agama', ['Islam', 'Katholik','Kristen','Hindu','Buddha','Kong Hu Chu'])->nullable();
            // $table->date('tgl_lahir')->nullable();
            // $table->string('tmpt_lahir')->nullable();
            // $table->string('jabatan')->nullable();
            // $table->enum('status',['menikah', 'belum menikah'])->nullable();
            // $table->string('no_ktp')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
