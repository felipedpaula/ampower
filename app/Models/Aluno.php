<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'aluno_dados';

    public function getTodosAlunos() {
        return self::join('users', 'users.id', '=', 'aluno_dados.id_user')
        ->where('users.tipo_id', '=', 4)
        ->whereNull('users.deleted_at')
        ->select('users.id', 'users.name', 'users.tipo_id', 'users.status','aluno_dados.id_turma', 'aluno_dados.matricula')
        ->get();
    }

    public function getAlunoByUserId($idUser) {
        return self::join('users', 'users.id', '=', 'aluno_dados.id_user')
        ->where('users.id', '=', $idUser)
        ->select(
            'users.id',
            'users.name',
            'users.email',
            'users.tipo_id',
            'users.status',
            'users.created_at',
            'aluno_dados.id_turma',
            'aluno_dados.matricula',
            'aluno_dados.data_nasc',
            'aluno_dados.cpf',
            'aluno_dados.rg',
            'aluno_dados.tel',
            'aluno_dados.cel',
            'aluno_dados.endereco',
            'aluno_dados.cep',
            'aluno_dados.foto'
        )
        ->first();
    }

    public function gerAlunoByTurmaId($idTurma) {
        return self::join('users', 'users.id', '=', 'aluno_dados.id_user')
        ->where('aluno_dados.id_turma', '=', $idTurma)
        ->whereNull('users.deleted_at')
        ->select(
            'users.id',
            'users.name',
            'users.status',
            'aluno_dados.foto'
        )
        ->get();
    }
}
