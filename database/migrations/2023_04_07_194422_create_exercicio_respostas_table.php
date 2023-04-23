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
        Schema::create('exercicio_respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_exercicio');
            $table->foreign('id_exercicio')->references('id')->on('exercicios')->onDelete('cascade');
            $table->text('texto');
            $table->boolean('correta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercicio_respostas');
    }
};
