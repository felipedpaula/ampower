<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
            'name' => 'Administrador',
            'tipo_id' => 2,
            'email' => 'admin@email.com',
            'password' => Hash::make('admin000'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Aluno Um',
            'tipo_id' => 4,
            'email' => 'aluno1@email.com',
            'password' => Hash::make('amaluno'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Professor Um',
            'tipo_id' => 3,
            'email' => 'prof1@email.com',
            'password' => Hash::make('amprof'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('aluno_dados')->insert([
            'id_user' => 2,
            'matricula' => str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('professor_dados')->insert([
            'id_user' => 3,
            'matricula' => str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT),
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
