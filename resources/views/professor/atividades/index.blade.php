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
                Atividades
                <ul>
                    @foreach ($atividades as $atividade)
                    <li>{{$atividade->titulo}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="body-content-col">
                <div class="list-options-turma">
                    <a class="option-turma" href="{{route('atividade.create', ['id' => $turma->id])}}">
                        Nova atividade
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
