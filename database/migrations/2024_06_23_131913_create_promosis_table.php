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
        Schema::create('promosis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawans')->constrained('karyawans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('keterangan');
            $table->string('surat_promosi');
            $table->date('tanggal_promosi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promosis');
    }
};
