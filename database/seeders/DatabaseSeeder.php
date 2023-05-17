<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('tipos_user')->insert([
            'tipo' => 'Sem tipo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_user')->insert([
            'tipo' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_user')->insert([
            'tipo' => 'Professor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_user')->insert([
            'tipo' => 'Aluno',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('atividade_tipos')->insert([
            'tipo' => 'Pergunta e Resposta',
        ]);

        DB::table('atividade_tipos')->insert([
            'tipo' => 'Completar',
        ]);

        DB::table('atividade_tipos')->insert([
            'tipo' => 'Selecionar Correta',
        ]);

        DB::table('atividade_tipos')->insert([
            'tipo' => 'Alternativa',
        ]);

        DB::table('atividade_tipos')->insert([
            'tipo' => 'Verdadeiro ou Falso',
        ]);
    }
}
