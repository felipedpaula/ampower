<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function getTodasTurmas() {

    }

    public function getAlunosTurma() {

    }

    public function getTurmasByProfessorId($idUser) {
        return Turma::where('id_professor', $idUser)
        ->orderBy('nivel')
        ->get();
    }



}
