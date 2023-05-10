<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// /login: a rota para exibir o formulário de login;
// POST /login: a rota para enviar os dados do formulário de login;
// /logout: a rota para fazer logout do usuário autenticado;
// /register: a rota para exibir o formulário de registro;
// POST /register: a rota para enviar os dados do formulário de registro;
// /password/reset: a rota para exibir o formulário de reset de senha;
// POST /password/email: a rota para enviar o e-mail de reset de senha;
// POST /password/reset: a rota para enviar o formulário de reset de senha;
// /email/verify: a rota para exibir a página de verificação de e-mail;
// POST /email/resend: a rota para reenviar o e-mail de verificação;
// GET /email/verify/{id}/{hash}: a rota para verificar o e-mail do usuário.
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
