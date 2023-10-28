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
        Schema::create('pajak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_satker');
            $table->decimal('grade15');
            $table->decimal('grade14');
            $table->decimal('grade13');
            $table->decimal('grade12');
            $table->decimal('grade11');
            $table->decimal('grade10');
            $table->decimal('grade9');
            $table->decimal('grade8');
            $table->decimal('grade7');
            $table->decimal('grade6');
            $table->decimal('grade5');
            $table->decimal('grade4');
            $table->decimal('jumlah');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('id_satker')->references('id')->on('satker'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pajak');
    }
};
