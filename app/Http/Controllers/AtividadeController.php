<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Atividade;
use App\Models\Exercicio;
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
    private $atividade;
    private $exercicio;
    private $atividades;
    private $turma;
    private $alunos;
    private $professor;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $this->professor = Professor::find(Auth::id());
        $this->dadosPagina['professor'] = $this->professor;

        $this->alunos = new Turma(); // Busca alunos da Turma pelo Model Turma
        $this->dadosPagina['alunos'] = $this->alunos->getAlunosTurma();

        $this->turma = Turma::find($idTurma);
        $this->dadosPagina['turma'] = $this->turma;

        $this->atividades = Atividade::all();
        $this->dadosPagina['atividades'] = $this->atividades;

        return view('professor.atividades.index', $this->dadosPagina);
    }

    public function create(Request $request)
    {
        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $this->professor = Professor::find(Auth::id());
        $this->dadosPagina['professor'] = $this->professor;

        $this->turma = Turma::find($idTurma);
        $this->dadosPagina['turma'] = $this->turma;

        return view('professor.atividades.create', $this->dadosPagina);
    }

    public function store(Request $request)
    {
        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $data = $request->only([
            'titulo',
            'nota',
            'prazo',
            'descricao',
        ]);

        $rules = [
            'titulo' => ['required', 'max:255'],
            'nota' => ['required', 'max:255'],
            'prazo' => ['nullable', 'date'],
            'descricao' => ['nullable', 'max:255'],
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('atividade.create' , ['id' => $idTurma])
            ->withErrors($validator)
            ->withInput();
        }

        try {
            $this->atividade = new Atividade();
            $this->atividade->titulo = $data['titulo'];
            $this->atividade->turma_id = $idTurma;
            $this->atividade->professor_id = Auth::id();
            $this->atividade->nota = $data['nota'];
            $this->atividade->prazo = $data['prazo'];
            $this->atividade->descricao = $data['descricao'];
            $this->atividade->status = 0;

            $this->atividade->save();

            return redirect()->route('atividade.index', ['id' => $idTurma])->with('success', 'Atividade criada com sucesso!');

        } catch (\Exception $e) {
            return redirect()->route('atividade.create', ['id' => $idTurma])->with('error', 'Ocorreu um erro ao tentar salvar a atividade!');
        }
    }

    // IMPLEMENTAR
    public function update(Request $request)
    {}

    public function edit(Request $request)
    {
        $this->authorize('turmas-professor');
        $idTurma = $request->id;
        $idAtividade = $request->id_atividade;

        $this->dadosPagina['turma'] = Turma::find($idTurma);
        $this->dadosPagina['atividade'] = Atividade::find($idAtividade);

        return view('professor.atividades.edit', $this->dadosPagina);

    }

    public function exercicioCreate(Request $request)
    {
        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $this->professor = Professor::find(Auth::id());
        $this->dadosPagina['professor'] = $this->professor;

        $this->turma = Turma::find($idTurma);
        $this->dadosPagina['turma'] = $this->turma;

        $idAtividade = $request->id_atividade;
        $this->dadosPagina['atividade'] = Atividade::find($idAtividade);

        return view('professor.atividades.exercicio.create', $this->dadosPagina);
    }

    public function exercicioStore(Request $request)
    {
        $this->authorize('turmas-professor');

        $idTurma = $request->id;

        $this->turma = Turma::find($idTurma);
        $this->dadosPagina['turma'] = $this->turma;

        $idAtividade = $request->id_atividade;
        $this->dadosPagina['atividade'] = Atividade::find($idAtividade);

        $data = $request->only([
            'enunciado',
            'tipo_exercicio',
            'titulo'
        ]);

        $rules = [
            'enunciado' => ['required', 'max:255'],
            'titulo' => ['required', 'max:255'],
            'tipo_exercicio' => ['required']
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('atividade.exercicio.create' , ['id' => $idTurma, 'id_atividade' => $idAtividade])
            ->withErrors($validator)
            ->withInput();
        }

        try {
            $this->exercicio = new Exercicio();
            $this->exercicio->titulo = $data['titulo'];
            $this->exercicio->enunciado = $data['enunciado'];
            $this->exercicio->tipo_id = $data['tipo_exercicio'];
            $this->exercicio->id_turma = $idTurma;

            $this->exercicio->save();

            return redirect()->route('atividade.edit', ['id' => $idTurma, 'id_atividade' => $idAtividade])->with('success', 'Exercício criado com sucesso!');

        } catch (\Exception $e) {
            return redirect()->route('atividade.edit', ['id' => $idTurma, 'id_atividade' => $idAtividade])->with('error', 'Ocorreu um erro ao tentar salvar a atividade!');
        }
    }
}
