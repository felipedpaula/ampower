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

        <div class="table-area">
            Alunos
            <ul>
                @foreach ($alunos as $item)
                <li>{{$item->name}}</li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection
