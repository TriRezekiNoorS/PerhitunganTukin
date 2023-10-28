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
        Schema::create('laporan', function (Blueprint $table) {
            $table->unsignedbigInteger('id')->primary();
            $table->string('tanggal');
            $table->foreignId('satker_id');
            $table->string('saldoawal');
            $table->string('usulantukin');
            $table->string('totalkebutuhan');
            $table->string('pajak');
            $table->string('potongan');
            $table->string('tunjangandibayar');
            $table->string('jumlah');
            $table->string('status');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('satker_id')->references('id')->on('satker');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
