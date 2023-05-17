@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Área do Professor') }}
        </div>
        <div class="back-dash">
            <a href="/turma-professor">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-header">
            <h3>Turma: {{$turma->nome}}</h3>
        </div>

        <div class="card-body-content">
            <div class="body-content-col">
                <div class="list-options-turma">
                    <a class="option-turma" href="#">
                        Presenças
                    </a>
                    <a class="option-turma" href="{{route('atividade.index', ['id' => $turma->id])}}">
                        Atividades
                    </a>
                    <a class="option-turma" href="#">
                        Notas
                    </a>
                </div>
            </div>
            <div class="body-content-col">
                Alunos
                <ul>
                    @foreach ($alunos as $item)
                    <li>{{$item->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
