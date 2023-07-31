@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Área do Professor') }}
        </div>
        <div class="back-dash">
            <a href="/turma-professor/{{$turma->id}}/atividade">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-title">
            <strong>Novo exercício - {{$atividade->titulo}}</strong>
        </div>
        <div class="card-body-content">
            <div class="card-body-column">
                <form method="POST" action="{{route('atividade.exercicio.create', ['id' => $turma->id, 'id_atividade' => $atividade->id])}}">
                    @csrf
                    <div class="col-form">
                        <div class="input-form">
                            <label for="tipo">Tipo de exercício:</label>
                            <select name="tipo_exercicio" id="tipo_exercicio">
                                <option value="1">Perguntas e Respostas</option>
                            </select>
                        </div>
                        <div class="input-form">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" id="titulo_exercicio">
                        </div>
                        <div class="input-form">
                            <label for="enunciado">Enunciado:</label>
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
