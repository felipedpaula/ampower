@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Secretaria') }}
        </div>
        <div class="back-dash">
            <a href="/escola">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-header">
            <h3>Turmas</h3>
            <a href="{{route('turma.create')}}">Nova turma</a>
        </div>

        <div class="table-area">
            @if (isset($turmas) && !empty($turmas))
                <table class="table-default">
                    <thead>
                        <tr>
                            <th>Nível</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($turmas as $turma)
                        <tr>
                            <td>{{$turma->nivel}}</td>
                            <td>{{$turma->nome}}</td>
                            <td>
                                <form method="POST" action="{{route('turma.delete', ['id' => $turma->id])}}">
                                    @csrf
                                    <a href="{{route('turma.edit', ['id' => $turma->id])}}">Editar</a>
                                    <input onclick="return confirm('Tem certeza de que deseja excluir esta turma?')" type="submit" value="Excluir">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                Você ainda não tem alunos cadastrados.
            @endif
        </div>
    </div>
@endsection
