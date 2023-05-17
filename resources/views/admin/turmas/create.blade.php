@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Secretaria') }}
        </div>
        <div class="back-dash">
            <a href="/turma">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="card-body-title">
            Nova turma
        </div>

        <div class="card-body-content">
            <form method="POST" action="{{route('turma.store')}}">
                @csrf
                <div class="col-form">
                    <div class="input-form">
                        <label for="name">Nome da turma:</label>
                        <input name="name" class="input-field" type="text" value="{{old('name')}}">
                    </div>

                    <div class="input-form">
                        <label for="nivel">Nível:</label>
                        <select class="input-field" name="nivel">
                            <option value="0">--</option>
                            @for ($n = 1; $n <= 10; $n++)
                            <option value="{{$n}}">{{$n}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="input-form">
                        <label for="professor">Professor responsável:</label>
                        <select class="input-field" name="professor" id="professor_responsavel">
                            <option value="0">--</option>
                            @if (isset($professores) && !empty($professores))
                                @foreach ($professores as $professor)
                                <option value="{{$professor->id}}">{{$professor->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="input-form">
                        <label for="sala">Sala:</label>
                        <input class="input-field" type="text" name="sala" id="sala">
                    </div>

                    <div class="input-form">
                        <label for="horario">Horário aula:</label>
                        <input class="input-field" type="text" name="horario" id="horario">
                    </div>

                    <div class="input-form">
                        <input value="Salvar" class="input-field btn-save" type="submit">
                    </div>
                </div>
                <div class="col-form">
                    <div class="input-form">
                        <label for="alunos">Alunos na turma:</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#cpf').mask('000.000.000-00');
        $('#rg').mask('0000000');
        $('#cep').mask('00000-000');
        $('#cel').mask('(00) 00000-0000');
        $('#tel').mask('(00) 0000-0000');
        $('#horario').mask('00:00 - 00:00');
    </script>
@endsection
