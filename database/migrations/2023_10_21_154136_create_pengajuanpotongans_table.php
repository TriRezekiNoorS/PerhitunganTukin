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
        Schema::create('pengajuanpotongan', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->foreignId('id_pegawai');
            $table->string('status');
            $table->foreignId('jenispotongan_id');
            $table->decimal('jumlahpotongan');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('id_pegawai')->references('id')->on('pegawai');
            $table->foreign('jenispotongan_id')->references('id')->on('jenispotongan'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuanpotongan');
    }
};
