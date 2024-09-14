@extends('base')

@section('titulo', 'Filmes para cadastrar')

@section('conteudo')
<div class="container mt-5">
    <p class="mb-4">
        <a href="{{ route('filmes.cadastrar') }}" class="btn btn-success">
            <i class="fas fa-plus mr-2"></i>Cadastrar Filme
        </a>
    </p>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Sinopse</th>
                    <th>Ano</th>
                    <th>Categoria</th>
                    <th>Imagem</th>
                    <th>Link</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filmes as $filme)
                <tr>
                    <td>{{ $filme->nome }}</td>
                    <td>{{ $filme->sinopse }}</td>
                    <td>{{ $filme->ano }}</td>
                    <td>{{ $filme->categoria }}</td>
                    <td>
                        @if($filme->imagem)
                            <img src="{{ asset('storage/' . $filme->imagem) }}" alt="Imagem do filme" class="img-thumbnail" style="max-width: 100px;">
                        @else
                            Sem imagem
                        @endif
                    </td>
                    <td>
                        <a href="{{ $filme->link }}" target="_blank">{{ $filme->link }}</a>
                    </td>
                    <td>
                        <a href="{{ route('filmes.apagar', $filme->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este filme?')">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



