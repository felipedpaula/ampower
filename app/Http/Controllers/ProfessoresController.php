<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessoresController extends Controller
{
    private $data;
    private $user;
    private $professor;
    private $professores;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('professores.index');
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

        $validator = Validator::make($data, [
            'name' => ['nullable', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'data_nasc' => ['nullable', 'date'],
            'cpf' => ['nullable', 'max:14'],
            'rg' => ['nullable', 'max:15'],
            'tel' => ['nullable', 'max:15'],
            'cel' => ['nullable', 'max:15'],
            'endereco' => ['nullable', 'string', 'max:255'],
            'cep' => ['nullable', 'max:9'],
            'foto' => ['nullable', 'file', 'mimes:jpg,png,webp']
        ]);

        if($validator->fails()) {
            return redirect()->route('professor.create')
            ->withErrors($validator)
            ->withInput();
        }

        print_r($data);
    }
}
