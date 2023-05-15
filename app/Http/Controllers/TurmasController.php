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
    private $alunos;
    private $professores;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorize('turma-config');
    }

    public function index() {
        $this->turmas = Turma::all();
        $this->dadosPagina['turmas'] = $this->turmas;

        return view('turmas.index', $this->dadosPagina);
    }

    public function create() {
        $this->professores = new Professor();
        $this->dadosPagina['professores'] = $this->professores->getTodosProfessores();

        $this->alunos = new Turma(); // Busca alunos da Turma pelo Model Turma
        $this->dadosPagina['alunos'] = $this->alunos->getAlunosTurma();

        return view('turmas.create', $this->dadosPagina);
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'nivel',
            'professor',
            'sala',
            'horario',
        ]);

        $rules = [
            'name' => ['required', 'max:255'],
            'nivel' => ['nullable', 'max:2'],
            'professor' => ['nullable', 'max:255'],
            'sala' => ['string', 'nullable', 'max:4'],
            'horario' => ['string', 'nullable', 'max:255']
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('turma.create')
            ->withErrors($validator)
            ->withInput();
        }

        try {
            $this->turma = new Turma();
            $this->turma->nome = $data['name'];
            $this->turma->nivel = $data['nivel'];
            $this->turma->id_professor = $data['professor'];
            $this->turma->sala = $data['sala'];
            $this->turma->horario_aula = $data['horario'];
            $this->turma->status = 1;
            $this->turma->qt_alunos = 0;
            $this->turma->save();

            return redirect()->route('turma.index')->with('success', 'Turma criada com sucesso!');

        } catch(\Exception $e) {
            return redirect()->route('turma.create')->with('error', 'Ocorreu um erro ao tentar salvar a turma!');
        }
    }

    public function edit(Request $request) {
        $id = $request->id;

        $this->turma = Turma::find($id);

        $this->professores = new Professor();
        $this->alunos = new Aluno();

        $this->dadosPagina['alunos'] = $this->alunos->gerAlunoByTurmaId($id);
        $this->dadosPagina['professores'] = $this->professores->getTodosProfessores();

        $this->dadosPagina['turma'] = $this->turma;

        return view('turmas.edit', $this->dadosPagina);
    }

    public function update(Request $request) {
        $id = $request->id;

        $data = $request->only([
            'name',
            'nivel',
            'professor',
            'sala',
            'horario',
        ]);

        $rules = [
            'name' => ['required', 'max:255'],
            'nivel' => ['nullable', 'max:2'],
            'professor' => ['nullable', 'max:255'],
            'sala' => ['string', 'nullable', 'max:4'],
            'horario' => ['string', 'nullable', 'max:255']
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('turma.create')
            ->withErrors($validator)
            ->withInput();
        }
    }
}
