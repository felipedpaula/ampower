@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Secretaria') }}
        </div>
        <div class="back-dash">
            <a href="/home">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="list-card">
            <a class="card-single" href="/aluno">
                Alunos
            </a>
            <a class="card-single" href="/professor">
                Professores
            </a>
            <a class="card-single" href="/turma">
                Turmas
            </a>
        </div>
    </div>
@endsection
