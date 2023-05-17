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
        Schema::create('atividade_aluno_respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atividade_id');
            $table->foreign('atividade_id')->references('id')->on('atividades');
            $table->unsignedBigInteger('pergunta_id');
            $table->foreign('pergunta_id')->references('id')->on('atividade_perguntas');
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id_user')->on('aluno_dados');
            $table->string('resposta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividade_aluno_respostas');
    }
};
