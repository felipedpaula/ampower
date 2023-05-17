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
        Schema::create('atividade_perguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atividade_id');
            $table->foreign('atividade_id')->references('id')->on('atividades');
            $table->string('pergunta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividade_perguntas');
    }
};
