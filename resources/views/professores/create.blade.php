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

        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Ocoreu um erro!</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body-content">
            <form method="POST" action="{{route('professor.store')}}">
                @csrf
                <div class="col-form">
                    <div class="input-form">
                        <label for="name">Nome:</label>
                        <input name="name" class="input-field" type="text">
                    </div>

                    <div class="input-form">
                        <label for="email">Email:</label>
                        <input name="email" class="input-field" type="email">
                    </div>

                    <div class="input-form">
                        <label for="data_nasc">Nascimento:</label>
                        <input name="data_nasc" class="input-field" type="date">
                    </div>

                    <div class="input-form">
                        <label for="name">CPF:</label>
                        <input name="cpf" class="input-field" type="text">
                    </div>

                    <div class="input-form">
                        <label for="name">RG:</label>
                        <input name="rg" class="input-field" type="text">
                    </div>

                    <div class="input-form">
                        <label for="tel">Telefone:</label>
                        <input name="tel" class="input-field" type="text">
                    </div>

                    <div class="input-form">
                        <label for="cel">Celular:</label>
                        <input name="cel" class="input-field" type="text">
                    </div>
                </div>
                <div class="col-form">
                    <div class="input-form">
                        <label for="endereco">Endereço:</label>
                        <input name="endereco" class="input-field" type="text">
                    </div>

                    <div class="input-form">
                        <label for="cep">CEP:</label>
                        <input name="cep" class="input-field" type="text">
                    </div>

                    <div class="input-form">
                        <label for="foto">Foto de perfil:</label>
                        <input name="foto" class="input-field" type="file">
                    </div>

                    <div class="input-form">
                        <input value="Salvar" class="input-field" type="submit">
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
