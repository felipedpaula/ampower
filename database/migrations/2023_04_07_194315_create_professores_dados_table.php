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
        Schema::create('professor_dados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('matricula')->unique();
            $table->date('data_nasc')->nullable();
            $table->string('cpf')->unique()->nullable();
            $table->string('rg')->unique()->nullable();
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
        Schema::dropIfExists('professores_dados');
    }
};
