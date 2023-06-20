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
// Auth::routes();
Auth::routes([
    // 'register' => false,
    'email/verify' => false,
    'email/resend' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/escola', function () {
    return view('admin.escola');
});

Route::prefix('professor')->group(function () {
    Route::get('/', [App\Http\Controllers\ProfessoresController::class, 'index'])->name('professor.index');
    Route::get('/create', [App\Http\Controllers\ProfessoresController::class, 'create'])->name('professor.create');
    Route::post('/create', [App\Http\Controllers\ProfessoresController::class, 'store'])->name('professor.store');
    Route::get('/{id}/edit', [App\Http\Controllers\ProfessoresController::class, 'edit'])->name('professor.edit');
    Route::post('{id}/update', [App\Http\Controllers\ProfessoresController::class, 'update'])->name('professor.update');
    Route::post('{id}/delete', [App\Http\Controllers\ProfessoresController::class, 'delete'])->name('professor.delete');
});

Route::prefix('aluno')->group(function () {
    Route::get('/', [App\Http\Controllers\AlunosController::class, 'index'])->name('aluno.index');
    Route::get('/create', [App\Http\Controllers\AlunosController::class, 'create'])->name('aluno.create');
    Route::post('/create', [App\Http\Controllers\AlunosController::class, 'store'])->name('aluno.store');
    Route::get('/{id}/edit', [App\Http\Controllers\AlunosController::class, 'edit'])->name('aluno.edit');
    Route::post('{id}/update', [App\Http\Controllers\AlunosController::class, 'update'])->name('aluno.update');
    Route::post('{id}/delete', [App\Http\Controllers\AlunosController::class, 'delete'])->name('aluno.delete');
});

Route::prefix('turma')->group(function () {
    Route::get('/', [App\Http\Controllers\TurmasController::class, 'index'])->name('turma.index');
    Route::get('/create', [App\Http\Controllers\TurmasController::class, 'create'])->name('turma.create');
    Route::post('/create', [App\Http\Controllers\TurmasController::class, 'store'])->name('turma.store');
    Route::get('/{id}/edit', [App\Http\Controllers\TurmasController::class, 'edit'])->name('turma.edit');
    Route::post('{id}/update', [App\Http\Controllers\TurmasController::class, 'update'])->name('turma.update');
    Route::post('{id}/delete', [App\Http\Controllers\TurmasController::class, 'delete'])->name('turma.delete');
});

Route::prefix('turma-professor')->group(function () {
    Route::get('/', [App\Http\Controllers\TurmaProfessorController::class, 'index'])->name('turmaprof.index');
    Route::get('/{id}', [App\Http\Controllers\TurmaProfessorController::class, 'turma'])->name('turmaprof.turma');
    Route::get('/{id}/atividade', [App\Http\Controllers\AtividadeController::class, 'index'])->name('atividade.index');
    Route::get('/{id}/atividade/create', [App\Http\Controllers\AtividadeController::class, 'create'])->name('atividade.create');
    Route::post('/{id}/atividade/store', [App\Http\Controllers\AtividadeController::class, 'store'])->name('atividade.store');
    Route::get('/{id}/atividade/{id_atividade}', [App\Http\Controllers\AtividadeController::class, 'edit'])->name('atividade.edit');
    Route::post('/{id}/atividade/{id_atividade}', [App\Http\Controllers\AtividadeController::class, 'update'])->name('atividade.update');
    Route::get('/{id}/atividade/{id_atividade}/questao', [App\Http\Controllers\AtividadeController::class, 'questaoCreate'])->name('atividade.questao.create');
    // Route::post('/{id}/atividade/{id_atividade}/questao', [App\Http\Controllers\AtividadeController::class, 'questaoStore'])->name('atividade.questao.store');
    // Route::get('/{id}/atividade/{id_atividade}/questao/{id_questao}', [App\Http\Controllers\AtividadeController::class, 'questaoEdit'])->name('atividade.questao.edit');
    // Route::post('/{id}/atividade/{id_atividade}/questao/{id_questao}', [App\Http\Controllers\AtividadeController::class, 'questaoUpdate'])->name('atividade.questao.update');
});
