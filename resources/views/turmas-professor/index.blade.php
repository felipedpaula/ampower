@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Área do Professor') }}
        </div>
        <div class="back-dash">
            <a href="/home">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-header">
            <h3>Minhas Turmas</h3>
        </div>

        <div class="table-area">
            <div class="list-card">
                @foreach ($turmas as $item)
                <a class="card-single" href="{{route('turmaprof.turma', ['id' => $item->id])}}">
                    {{$item->nome}}
                </a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
