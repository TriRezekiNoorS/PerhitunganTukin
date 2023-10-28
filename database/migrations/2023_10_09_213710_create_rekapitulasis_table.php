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
        Schema::create('rekapitulasi', function (Blueprint $table) {
            $table->unsignedbigInteger('id')->primary();
            $table->foreignId('satker_id');
            $table->foreignId('grade_id');
            $table->float('jumlahpegawai');
            $table->float('jumlahtunjangankinerja');
            $table->float('faktorpengurang');
            $table->float('pajak');
            $table->float('jumlahkebutuhan');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('satker_id')->references('id')->on('satker');
            $table->foreign('grade_id')->references('id')->on('grade');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapitulasi');
    }
};
