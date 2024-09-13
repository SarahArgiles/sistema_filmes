<?php

namespace App\Http\Controllers;

use App\Models\Filmes;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filmes::all();
        
        return view('filmes.index', [
            'filmes' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {
        $img = $form->file('imagem')->store('filmes', 'imagens');
        
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required|min:3',
            'ano' => 'required',
            'categoria' => 'required',
            'link' => 'required|min:3',
        
        ]);
        $dados['imagem'] =$img; 

        Filmes::create($dados);
        
        return redirect()->route('filmes');
    }

    public function apagar(Filmes $filme) {
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }

    public function deletar(Filmes $filme) {
        $filme->delete();
        return redirect()->route('filmes');
    }
}
