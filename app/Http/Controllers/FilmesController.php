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

    public function gravar(Request $form)
    {
       
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required|min:3',
            'ano' => 'required',
            'categoria' => 'required',
            'link' => 'required|min:3',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);
    
        if ($form->hasFile('imagem')) {
            $img = $form->file('imagem')->store('filmes', 'public');
            $dados['imagem'] = $img;
        } else {
            $dados['imagem'] = null; // Garantir que imagem é nula se não foi enviada
        }
        
        // Criar o registro no banco de dados
        Filmes::create($dados);
        
        // Adicionar o caminho da imagem à sessão
        return redirect()->route('filmes')->with('image', $img);
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




