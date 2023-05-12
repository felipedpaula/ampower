<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TurmasController extends Controller
{
    private $data;
    private $user;
    private $turma;
    private $turmas;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $this->turmas = new Turma();
        $this->dadosPagina['professores'] = '..';

        return view('turmas.index', $this->dadosPagina);
    }

    public function create() {
        return view('turmas.create');
    }
}
