@extends('base')


@section('titulo', 'Editar | Filmes')


@section('conteudo')
 <p>Edite o formulário</p>


    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>


        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif


 <form action="{{ route('filmes.editar', $filme->id) }}" method="post">
    @csrf
    @method('put')
 
    <p>
        <input value="{{ old('nome', $filme->nome ?? '') }}" type="text" name="nome" placeholder="Nome do filme" value="">
    </p>
    <p>
        <input value="{{ old('sinopse', $filme->sinopse ?? '') }}" type="text" name="sinopse" placeholder="Sinopse" value="">
    </p>
    <p>
        <input value="{{ old('usuario', $filme->ano ?? '') }}" type="date" name="ano" placeholder="Ano" value="">
    </p>
     <p>
        <input value="{{ old('senha', $filme->categoria ?? '') }}" type="text" name="categoria" placeholder="Categoria" value="">
    </p>
    <p>
        <input value="{{ old('admin', $filme->link?? '') }}" type="text" name="link" placeholder="link" value="">
    </p>


    <input type="submit" value="Editar">
 </form>


@endsection
 