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
        Schema::create('atividade_aluno_notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atividade_id');
            $table->foreign('atividade_id')->references('id')->on('atividades');
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id_user')->on('aluno_dados');
            $table->string('nota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividade_aluno_notas');
    }
};
