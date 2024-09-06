<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filme::all();
        
        return view('filmes.index', [
            'filmes' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {
        $img = $form->file('imagem')->store('animais', 'imagem');
        
        $dados = $form->validate([
            'nome' => 'required|min:3',
        
        ]);
        $dados['imagem'] =$img; 

        Filme::create($dados);
        
        return redirect()->route('filmes');
    }

    public function apagar(Filme $filme) {
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }

    public function deletar(Filme $filme) {
        $filme->delete();
        return redirect()->route('filmes');
    }
}
