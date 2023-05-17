<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TurmaProfessorController extends Controller
{

    private $data;
    private $user;
    private $professor;
    private $turmas;
    private $alunos;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $this->authorize('turmas-professor');
        $profId = Auth::id();
        $this->professor = User::find($profId);
        $this->dadosPagina['professor'] = $this->professor;

        $this->turmas = new Turma();
        $this->dadosPagina['turmas'] = $this->turmas->getTurmasByProfessorId($profId);

        return view('professor.turmas-professor.index', $this->dadosPagina);
    }

    public function turma(Request $request) {
        $this->authorize('turmas-professor');

        $profId = Auth::id();
        $this->professor = User::find($profId);
        $this->dadosPagina['professor'] = $this->professor;

        $idTurma = $request->id;
        $this->turmas = new Turma();
        $this->dadosPagina['turma'] = Turma::find($idTurma);

        $this->alunos = new Aluno();
        $this->dadosPagina['alunos'] = $this->alunos->gerAlunoByTurmaId($idTurma);

        return view('professor.turmas-professor.turma', $this->dadosPagina);
    }
}
