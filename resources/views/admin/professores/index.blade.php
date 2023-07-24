@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            <h4>{{ __('Secretaria') }}</h4>
        </div>
        <div class="back-dash">
            <a href="/escola">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-header">
            <h3>Professores</h3>
            <a href="{{route('professor.create')}}">Novo professor</a>
        </div>

        <div class="table-area">
            @if (isset($professores) && !empty($professores))
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
                        @foreach ($professores as $professor)
                        <tr>
                            <td>{{$professor->id}}</td>
                            <td>{{$professor->name}}</td>
                            <td>{{$professor->matricula}}</td>
                            <td>
                                <form method="POST" action="{{route('professor.delete', ['id' => $professor->id])}}">
                                    @csrf
                                    <a href="{{route('professor.edit', ['id' => $professor->id])}}">Editar</a>
                                    <input onclick="return confirm('Tem certeza de que deseja excluir este professor?')" type="submit" value="Excluir">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                Você ainda não tem professes cadastrados.
            @endif
        </div>
    </div>
@endsection
