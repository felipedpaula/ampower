<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessoresController extends Controller
{
    private $data;
    private $user;
    private $professor;
    private $professores;
    private $dadosPagina;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $this->professores = new Professor();
        $this->dadosPagina['professores'] = $this->professores->getTodosProfessores();

        return view('professores.index', $this->dadosPagina);
    }

    public function create() {
        return view('professores.create');
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
            return redirect()->route('professor.create')
            ->withErrors($validator)
            ->withInput();
        }

        try {
            $this->user = new User();
            $this->user->name = $data['name'];
            $this->user->email = $data['email'];
            $this->user->tipo_id = 3; // ID 3 é de exclusivo de professor
            $this->user->password = Hash::make('amprof');
            $this->user->status = 1;
            $this->user->save();

            $this->professor = new Professor();
            $this->professor->id_user = $this->user->id;
            $this->professor->matricula = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);
            $this->professor->data_nasc = $data['data_nasc'];
            $this->professor->cpf = $data['cpf'];
            $this->professor->rg = $data['rg'];
            $this->professor->tel = $data['tel'];
            $this->professor->cel = $data['cel'];
            $this->professor->endereco = $data['endereco'];
            $this->professor->cep = $data['cep'];
            $this->professor->save();

            return redirect()->route('professor.index')->with('success', 'Professor criado com sucesso!');

        } catch (\Exception $e) {
            return redirect()->route('professor.create')->with('error', 'Ocorreu um erro ao criar o professor. Por favor, tente novamente.');
        }

    }

    public function edit(Request $request) {
        $id = $request->id;
        $this->professor = new Professor();
        $this->dadosPagina['professor'] = $this->professor->getProfessorByUserId($id);

        return view('professores.edit', $this->dadosPagina);
    }

    public function update(Request $request) {

        $id = $request->id;

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
            return redirect()->route('professor.edit' , ['id' => $id])
            ->withErrors($validator)
            ->withInput();
        }

        try {
            $this->user = User::find($id);
            $this->user->name = $data['name'];
            $this->user->email = $data['email'];
            $this->user->save();

            $this->professor = Professor::where('id_user', $id)->first();
            $this->professor->data_nasc = $data['data_nasc'];
            $this->professor->cpf = $data['cpf'];
            $this->professor->rg = $data['rg'];
            $this->professor->tel = $data['tel'];
            $this->professor->cel = $data['cel'];
            $this->professor->endereco = $data['endereco'];
            $this->professor->cep = $data['cep'];
            $this->professor->save();

            return redirect()->route('professor.index')->with('success', 'Professor editado com sucesso!');

        } catch (\Exception $e) {
            return redirect()->route('professor.edit', ['id'=>$id])->with('error', 'Ocorreu um erro ao criar o professor. Por favor, tente novamente.');
        }
    }

    public function delete($id) {
        $this->user = User::find($id);;
        try {
            $this->user->delete();
            return redirect()->route('professor.index')->with('success', 'Professor deletado com sucesso!');
        } catch(\Exception $e) {
            return redirect()->route('professor.index')->with('error', 'Ocorreu um erro ao deletar o professor. Por favor, tente novamente.');
        }
    }
}
