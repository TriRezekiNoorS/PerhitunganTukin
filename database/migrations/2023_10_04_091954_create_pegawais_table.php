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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->unsignedbigInteger('id')->primary();
            $table->string('namapegawai');
            $table->foreignId('golongan_id');
            $table->foreignId('jabatan_id');
            $table->foreignId('grade_id');
            $table->foreignId('satker_id');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('golongan_id')->references('id')->on('golongan');
            $table->foreign('jabatan_id')->references('id')->on('jabatan'); 
	        $table->foreign('grade_id')->references('id')->on('grade'); 
            $table->foreign('satker_id')->references('id')->on('satker'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
