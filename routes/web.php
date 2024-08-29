<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Por meio dos métodos na URL, a View solicita para Route, que puxa as funções do EventController e retorna para a View
//middleware('auth') -> permite que somente usuários autenticados acessem as páginas

//Rotas da página principal
Route::get('/', [EventController::class, 'index']);

//Rotas para a página saibaMais
Route::get('/saibaMais', [EventController::class, 'saibaMais']);

//Rotas para a página informações do Curso
Route::get('/curso', [EventController::class, 'curso']);

//Rotas para a página cadastrar de pessoas
Route::get('/cadastrar', [EventController::class, 'cadastrar'])->middleware('auth');

//Rotas para a página visualizar cadastros
Route::get('/inscritos', [EventController::class, 'inscritos'])->middleware('auth');

//Rotas para a página principal após o cadastro do adm
Route::get('/dashboard', [EventController::class, 'index'])->middleware('auth');

//Rotas para a página avaliar
Route::get('/avaliacao', [EventController::class, 'avaliacao'])->middleware('auth');

//Rotas para salvar cadastro no banco 
Route::post('/pessoas', [EventController::class, 'store'])->middleware('auth');

//Rotas para salvar cadastro no banco 
Route::post('/avaliacoes', [EventController::class, 'storeAvaliacao'])->middleware('auth');

//Rotas para deletar cadastro do banco 
Route::delete('/pessoas/{id}', [EventController::class, 'destroy'])->middleware('auth');

//Rotas para editar cadastro do banco 
Route::get('/pessoas/editar/{id}', [EventController::class, 'edit'])->middleware('auth');

//Rotas para atualizar cadastro do banco 
Route::put('/pessoas/update/{id}', [EventController::class, 'update'])->middleware('auth');

//Rotas após login 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
});
