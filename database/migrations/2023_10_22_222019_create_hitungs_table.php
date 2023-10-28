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
        Schema::create('hitung', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id');
            $table->float('jumlahpenerima');
            $table->float('tunjanganperkj');
            $table->float('jumlahtunjangan');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('grade_id')->references('id')->on('grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hitung');
    }
};
