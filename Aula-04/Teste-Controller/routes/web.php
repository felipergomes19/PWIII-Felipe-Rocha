<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\LivroController;

//Quando o usuário acessar seu-site.com/livros,
//o metodo 'index' do controller vai entrar em ação.
route::get('/livros',[LivroController::class, 'index']);

route::get('/buscar/{nome_jogo}', [GameController::class,'search']);

Route::get('/', function () {
    return view('welcome');
});
