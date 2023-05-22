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
            Nova atividade
        </div>
        <div class="card-body-content">
            <form method="POST" action="{{route('atividade.store', ['id' => $turma->id])}}">
                @csrf
                <div class="col-form">
                    <div class="input-form">
                        <label for="titulo">Título da atividade:</label>
                        <input name="titulo" class="input-field" type="text" value="{{old('titulo')}}">
                    </div>
                    <div class="input-form">
                        <label for="nota">Nota máxima:</label>
                        <input name="nota" class="input-field" type="text" value="{{old('nota')}}">
                    </div>
                    <div class="input-form">
                        <label for="prazo">Prazo:</label>
                        <input name="prazo" class="input-field" type="text" value="{{old('prazo')}}">
                    </div>
                    <div class="input-form">
                        <label for="descricao">Descrição:</label>
                        <textarea name="descricao" class="input-field" type="text" value="{{old('descricao')}}"></textarea>
                    </div>
                    <div class="input-form">
                        <input value="Salvar" class="input-field btn-save" type="submit">
                    </div>
                </div>
                <div class="col-form">

                </div>
            </form>
        </div>
    </div>
@endsection
