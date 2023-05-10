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
                <div class="input-form">
                    <label for="name">Nome:</label>
                    <input title="name" class="input-field" type="text">
                </div>

                <div class="input-form">
                    <label for="email">Email:</label>
                    <input title="email" class="input-field" type="email">
                </div>

                <div class="input-form">
                    <label for="data_nasc">Nascimento:</label>
                    <input title="data_nasc" class="input-field" type="date">
                </div>

                <div class="input-form">
                    <label for="name">CPF:</label>
                    <input title="name" class="input-field" type="text">
                </div>

                <div class="input-form">
                    <label for="name">RG:</label>
                    <input title="name" class="input-field" type="text">
                </div>

                <div class="input-form">
                    <label for="tel">Telefone:</label>
                    <input title="tel" class="input-field" type="text">
                </div>

                <div class="input-form">
                    <label for="cel">Celular:</label>
                    <input title="cel" class="input-field" type="text">
                </div>
            </form>
        </div>
    </div>
@endsection
