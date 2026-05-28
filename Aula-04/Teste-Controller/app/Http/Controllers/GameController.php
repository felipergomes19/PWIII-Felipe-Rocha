<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //Função Index
    public function Index($nome_jogo) {
        return "Procurando pelo jogo: $nome_jogo...";
    }
}
