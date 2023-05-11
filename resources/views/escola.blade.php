@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Secretaria') }}
        </div>
        <div class="back-dash">
            <a href="{{url()->previous()}}">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <ul>
            <li><a href="/aluno">Alunos</a></li>
            <li><a href="/professor">Professores</a></li>
            <li><a href="/turma">Turmas</a></li>
        </ul>
    </div>
@endsection
