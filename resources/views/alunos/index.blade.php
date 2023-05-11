@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Secretaria') }}
        </div>
        <div class="back-dash">
            <a href="{{url()->previous()}}">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-header">
            <h3>Alunos</h3>
            <a href="{{route('aluno.create')}}">Novo aluno</a>
        </div>

        <div class="table-area">
            @if (isset($alunos) && !empty($alunos))
                <table class="table-default">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Matrícula</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)
                        <tr>
                            <td>{{$aluno->id}}</td>
                            <td>{{$aluno->name}}</td>
                            <td>{{$aluno->matricula}}</td>
                            <td>
                                <form method="POST" action="{{route('aluno.delete', ['id' => $aluno->id])}}">
                                    @csrf
                                    <a href="{{route('aluno.edit', ['id' => $aluno->id])}}">Editar</a>
                                    <input onclick="return confirm('Tem certeza de que deseja excluir este aluno?')" type="submit" value="Excluir">
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
