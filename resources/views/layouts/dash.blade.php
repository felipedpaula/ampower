<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>

</head>
<body>
    <header>
        <div class="center">
            <div class="area-header">
                <div class="logo-header">
                    LOGO
                </div>
                <div class="config-header">
                    <img width="30px" height="30px" src="{{asset('assets/img/icons/settings.png')}}" alt="Settings">
                </div>
            </div>
        </div>
    </header>

    <div class="center">
        <div class="main-container">
            <div class="side-menu">
                <div>
                    <div class="welcome-user">
                        Olá, {{ Auth::user()->name }}
                    </div>

                    <nav>
                        <ul>
                            <a href="/home"><li>Painel</li></a>

                            {{-- ADMIN --}}
                            @can('aluno-config')
                            <a href="/escola"><li>Escola</li></a>
                            @endcan

                            @can('turma-aluno')
                            <a href="/turma-aluno"><li>Turma</li></a>
                            @endcan

                            @can('turma-aluno')
                            <a href="/configuracoes"><li>Configurações</li></a>
                            @endcan
                            {{--END ADMIN --}}

                            {{-- PROFESSOR --}}
                            @can('turmas-professor')
                            <a href="/turma-professor"><li>Minhas Turmas</li></a>
                            @endcan

                        </ul>

                    </nav>
                </div>

                <form class="form-logout" method="POST" action="{{route('logout')}}">
                    @csrf
                    <input onclick="return confirm('Tem certeza que quer sair?')" type="submit" name="logout" id="logout" value="Sair">
                </form>
            </div>

            <div class="area-main">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

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

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
