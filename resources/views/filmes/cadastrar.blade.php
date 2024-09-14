@extends('base')

@section('titulo', 'Cadastrar | Filmes para cadastro')

@section('conteudo')
<div class="container mt-5">
    <p class="mb-4">Preencha o formulário</p>

    @if($errors->any())
        <div class="alert alert-danger">
            <h4>Deu ruim</h4>
            @foreach($errors->all() as $erro)
                <p>{{ $erro }}</p>
            @endforeach
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p class="text-xl pb-4">
                <i class="fas fa-list mr-3"></i> Cadastre seu filme
            </p>
            <div class="card p-4 shadow-sm">
                <form method="post" enctype="multipart/form-data" action="{{ route('filmes.gravar') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome do filme</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do filme" value="{{ old('nome') }}">
                    </div>
                    <div class="form-group">
                        <label for="sinopse">Sinopse</label>
                        <input type="text" id="sinopse" name="sinopse" class="form-control" placeholder="Sinopse" value="{{ old('sinopse') }}">
                    </div>
                    <div class="form-group">
                        <label for="ano">Ano de lançamento</label>
                        <input type="date" id="ano" name="ano" class="form-control" placeholder="Ano de lançamento" value="{{ old('ano') }}">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Categoria" value="{{ old('categoria') }}">
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" id="imagem" name="imagem" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" id="link" name="link" class="form-control" placeholder="Link" value="{{ old('link') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
