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
        <div class="card-body-title">
            <strong>Nova questão - {{$atividade->titulo}}</strong>
        </div>
        <div class="card-body-content">
            <div class="card-body-column">
                <form method="POST" action="{{route('')}}">
                    @csrf
                    <div class="col-form">
                        <div class="input-form">
                            <label for="questao">Questão:</label>
                            <textarea name="titulo" class="input-field"></textarea>
                        </div>
                        <div class="input-form">
                            <input value="Salvar" class="input-field btn-save" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
