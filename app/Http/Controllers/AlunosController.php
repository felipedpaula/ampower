<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlunosController extends Controller
{

    private $data;
    private $user;
    private $aluno;
    private $alunos;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $this->alunos = new Aluno();
        $this->dadosPagina['alunos'] = $this->alunos->getTodosAlunos();

        return view('alunos.index', $this->dadosPagina);
    }

    public function create() {
        return view('alunos.create');
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'email',
            'data_nasc',
            'cpf',
            'rg',
            'tel',
            'cel',
            'endereco',
            'cep',
            'foto'
        ]);

        $rules = [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'data_nasc' => ['nullable', 'date'],
            'cpf' => ['nullable', 'max:14'],
            'rg' => ['nullable', 'max:7'],
            'tel' => ['nullable', 'max:14'],
            'cel' => ['nullable', 'max:15'],
            'endereco' => ['nullable', 'string', 'max:255'],
            'cep' => ['nullable', 'max:9'],
            'foto' => ['nullable', 'file', 'mimes:jpg,png,webp']
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('aluno.create')
            ->withErrors($validator)
            ->withInput();
        }

        try {
            $this->user = new User();
            $this->user->name = $data['name'];
            $this->user->email = $data['email'];
            $this->user->tipo_id = 4; // ID 4 é de exclusivo de aluno
            $this->user->password = Hash::make('amaluno');
            $this->user->status = 1;
            $this->user->save();

            $this->aluno = new Aluno();
            $this->aluno->id_user = $this->user->id;
            $this->aluno->matricula = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);
            $this->aluno->data_nasc = $data['data_nasc'];
            $this->aluno->cpf = $data['cpf'];
            $this->aluno->rg = $data['rg'];
            $this->aluno->tel = $data['tel'];
            $this->aluno->cel = $data['cel'];
            $this->aluno->endereco = $data['endereco'];
            $this->aluno->cep = $data['cep'];
            $this->aluno->save();

            return redirect()->route('aluno.index')->with('success', 'Aluno criado com sucesso!');

        } catch (\Exception $e) {
            return redirect()->route('aluno.create')->with('error', 'Ocorreu um erro ao criar o aluno. Por favor, tente novamente.');
        }

    }
}
