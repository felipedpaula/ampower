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
        Schema::create('aluno_dados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_turma');
            $table->foreign('id_turma')->references('id')->on('turmas');
            $table->string('matricula');
            $table->date('data_nasc')->nullable();;
            $table->string('cpf')->nullable();;
            $table->string('rg')->nullable();;
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cep')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_dados');
    }
};
