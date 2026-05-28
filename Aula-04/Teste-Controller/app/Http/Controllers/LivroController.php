<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    //O metodo "index" geralmente serve para listar coisas
    public function index(){
        $livros = ["Harry Potter","Percy Jackson"," O Hobbit"];
        
        //O controller vai entregar a "view"(Pagina) com a lista dos livros
        return view('lista_livros',['livros' =>$livros]);
    }

    public function Show() {
        return "Você está vendo as informações do livro número: ". $id;
    }
}
