<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor_dados';

    public function getTodosProfessores() {
        return self::join('users', 'users.id', '=', 'professor_dados.id_user')
        ->where('users.tipo_id', '=', 3)
        ->whereNull('users.deleted_at')
        ->select('users.id', 'users.name', 'users.tipo_id', 'users.status', 'professor_dados.matricula')
        ->get();
    }

    public function getProfessorByUserId($idUser) {
        return self::join('users', 'users.id', '=', 'professor_dados.id_user')
        ->where('users.id', '=', $idUser)
        ->select(
            'users.id',
            'users.name',
            'users.email',
            'users.tipo_id',
            'users.status',
            'users.created_at',
            'professor_dados.matricula',
            'professor_dados.data_nasc',
            'professor_dados.cpf',
            'professor_dados.rg',
            'professor_dados.tel',
            'professor_dados.cel',
            'professor_dados.endereco',
            'professor_dados.cep',
            'professor_dados.foto'
        )
        ->first();
    }
}
