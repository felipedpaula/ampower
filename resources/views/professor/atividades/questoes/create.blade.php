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
                <form method="POST" action="{{route('atividade.questao.create', ['id' => $turma->id, 'id_atividade' => $atividade->id])}}">
                    @csrf
                    <div class="col-form">
                        <div class="input-form">
                            <label for="enunciado">Questão:</label>
                            <textarea name="enunciado" class="input-field"></textarea>
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
