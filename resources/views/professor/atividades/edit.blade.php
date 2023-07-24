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
            <strong>{{$atividade->titulo}}</strong>
        </div>
        <div class="card-body-content">
            <div class="card-body-column">
                <form method="POST" action="{{route('atividade.update', ['id' => $turma->id, 'id_atividade' => $atividade->id])}}">
                    @csrf
                    <div class="col-form">
                        <div class="input-form">
                            <label for="titulo">Título da atividade:</label>
                            <input name="titulo" class="input-field" type="text" value="{{$atividade->titulo}}">
                        </div>
                        <div class="input-form">
                            <label for="nota">Nota máxima:</label>
                            <input name="nota" class="input-field" type="text" value="{{$atividade->nota}}">
                        </div>
                        <div class="input-form">
                            <label for="prazo">Prazo:</label>
                            <input name="prazo" class="input-field" type="text" value="{{$atividade->prazo}}">
                        </div>
                        <div class="input-form">
                            <label for="descricao">Descrição:</label>
                            <textarea name="descricao" class="input-field">{{$atividade->descricao}}</textarea>
                        </div>
                        <div class="input-form">
                            <input value="Salvar" class="input-field btn-save" type="submit">
                        </div>
                    </div>
                    <div class="col-form">
                        <div class="input-form">
                            <a class="add-question" href="{{route('atividade.questao.create', ['id' => $turma->id, 'id_atividade' => $atividade->id])}}">+ Adicionar nova questão</a>
                        </div>
                    </div>
                </form>

                {{-- @if (isset($questoes) && !empty($questoes)) --}}
                <div class="questoes-atividade-area">
                    <strong>Questões da atividade</strong>
                    <div class="lista-questoes">
                        <ul>
                            <li>Questão 1</li>
                            <li>Questão 2</li>
                            <li>Questão 3</li>
                        </ul>
                    </div>
                </div>
                {{-- @endif --}}
            </div>
        </div>
    </div>
@endsection
