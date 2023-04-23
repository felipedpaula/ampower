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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aluno');
            $table->foreign('id_aluno')->references('id')->on('users');
            $table->unsignedBigInteger('id_turma');
            $table->foreign('id_turma')->references('id')->on('turmas');
            $table->unsignedBigInteger('id_professor');
            $table->foreign('id_professor')->references('id')->on('users');
            $table->float('n1')->nullable();
            $table->float('n2')->nullable();
            $table->float('n3')->nullable();
            $table->float('n4')->nullable();
            $table->float('n_final')->nullable();
            $table->string('ano');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
