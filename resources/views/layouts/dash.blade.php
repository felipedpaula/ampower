<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="assets/css/style.css">
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
            <div class="side-menu shadow">
                <div class="welcome-user">
                    Olá, {{ Auth::user()->name }}
                </div>

                <nav>
                    <ul>
                        <li>Painel</li>
                        <li>Turmas</li>
                        <li>Histórico</li>
                        <li>Pagamentos</li>
                        <li>Secretaria</li>
                        <li>Configurações</li>
                    </ul>
                </nav>
            </div>
            <div class="area-main shadow">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
