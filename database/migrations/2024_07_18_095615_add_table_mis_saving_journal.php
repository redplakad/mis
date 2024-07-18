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
        Schema::create('mis_saving_journal', function (Blueprint $table) {
            $table->id();
            $table->char('KD_CAB', 3)->nullable();
            $table->string('TANGGAL', 10)->nullable();
            $table->string('NOREK_BUBES', 5)->nullable();
            $table->string('DATA_POSTING', 8)->nullable();
            $table->string('NO_TX', 8)->nullable();
            $table->string('NO_REKENING', 15)->nullable();
            $table->string('NAMA_NASABAH', 50)->nullable();
            $table->string('KDTX', 5)->nullable();
            $table->float('DEBET', 15)->nullable();
            $table->float('KREDIT', 15)->nullable();
            $table->string('KETERANGAN', 50)->nullable();
            $table->string('JAM_TX', 8)->nullable();
            $table->string('USER_TX', 15)->nullable();
            $table->string('CAB_OTORISASI', 5)->nullable();
            $table->string('USER_OTORISASI', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mis_saving_journal');
    }
};
