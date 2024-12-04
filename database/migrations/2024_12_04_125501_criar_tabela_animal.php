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
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id_animal');
            $table->string('brinco', 8);
            $table->string('nome', 50)->nullable();
            $table->smallInteger('peso')->nullable();
            $table->char('sexo', 1);
            $table->char('cod_raca', 4);
            $table->foreign('cod_raca')->references('cod_raca')->on('raca');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
