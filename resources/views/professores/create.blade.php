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
        <div class="card-body-title">
            Novo professor
        </div>

        <div class="card-body-content">
            <form method="POST" action="{{route('professor.store')}}">
                @csrf
                <div class="col-form">
                    <div class="input-form">
                        <label for="name">Nome:</label>
                        <input name="name" class="input-field" type="text" value="{{old('name')}}">
                    </div>

                    <div class="input-form">
                        <label for="email">Email:</label>
                        <input name="email" class="input-field" type="email" value="{{old('email')}}">
                    </div>

                    <div class="input-form">
                        <label for="data_nasc">Nascimento:</label>
                        <input name="data_nasc" class="input-field" type="date" value="{{old('date')}}">
                    </div>

                    <div class="input-form">
                        <label for="name">CPF:</label>
                        <input id="cpf" name="cpf" class="input-field" type="text" value="{{old('cpf')}}">
                    </div>

                    <div class="input-form">
                        <label for="name">RG:</label>
                        <input id="rg" name="rg" class="input-field" type="text" value="{{old('rg')}}">
                    </div>

                    <div class="input-form">
                        <label for="tel">Telefone:</label>
                        <input id="tel" name="tel" class="input-field" type="text" value="{{old('tel')}}">
                    </div>

                    <div class="input-form">
                        <label for="cel">Celular:</label>
                        <input id="cel" name="cel" class="input-field" type="text" value="{{old('cel')}}">
                    </div>
                </div>
                <div class="col-form">
                    <div class="input-form">
                        <label for="endereco">Endereço:</label>
                        <input name="endereco" class="input-field" type="text" value="{{old('endereco')}}">
                    </div>

                    <div class="input-form">
                        <label for="cep">CEP:</label>
                        <input id="cep" name="cep" class="input-field" type="text" value="{{old('cep')}}">
                    </div>

                    <div class="input-form">
                        <label for="foto">Foto de perfil:</label>
                        <input name="foto" class="input-field-file" type="file">
                    </div>

                    <div class="input-form">
                        <input value="Salvar" class="input-field btn-save" type="submit">
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
    </script>
@endsection
