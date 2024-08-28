<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Por meio dos métodos na URL, a View solicita para Route, que puxa as funções do EventController e retorna para a View

//Rotas da página principal
Route::get('/', [EventController::class, 'index']);

//Rotas para a página saibaMais
Route::get('/saibaMais', [EventController::class, 'saibaMais']);

//Rotas para a página cadastrar de pessoas
Route::get('/cadastrar.blade.php', [EventController::class, 'cadastrar']);

//Rotas para a página visualizar cadastros
Route::get('/inscritos.blade.php', [EventController::class, 'inscritos']);

//Rotas para login 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
