<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AtividadeController extends Controller
{
    private $data;
    private $user;
    private $turma;
    private $alunos;
    private $professor;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {

        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $this->professor = Professor::find(Auth::id());
        $this->dadosPagina['professor'] = $this->professor;

        $this->alunos = new Turma(); // Busca alunos da Turma pelo Model Turma
        $this->dadosPagina['alunos'] = $this->alunos->getAlunosTurma();

        $this->turma = Turma::find($idTurma);
        $this->dadosPagina['turma'] = $this->turma;

        return view('professor.atividades.index', $this->dadosPagina);
    }

    public function create(Request $request) {
        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $this->professor = Professor::find(Auth::id());
        $this->dadosPagina['professor'] = $this->professor;

        $this->turma = Turma::find($idTurma);
        $this->dadosPagina['turma'] = $this->turma;

        return view('professor.atividades.create', $this->dadosPagina);
    }
}
