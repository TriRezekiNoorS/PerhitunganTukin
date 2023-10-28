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
        Schema::create('potongan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_satker');
            $table->float('grade15');
            $table->float('grade14');
            $table->float('grade13');
            $table->float('grade12');
            $table->float('grade11');
            $table->float('grade10');
            $table->float('grade9');
            $table->float('grade8');
            $table->float('grade7');
            $table->float('grade6');
            $table->float('grade5');
            $table->float('grade4');
            $table->float('jumlah');
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
        Schema::dropIfExists('potongan');
    }
};
