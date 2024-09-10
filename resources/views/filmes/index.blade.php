
@extends('base')

@section('titulo', 'Filmes para cadastrar')

@section('conteudo')

<p> 
   <a href="{{ route('filmes.cadastrar') }}"  ><i class="fas fa-plus mr-3"></i>Cadastrar Filme</a>
</p>

<table>

        <th>Nome</th>
        <th>Idade</th>
    </tr>

    @foreach ($filmes as $filme)
    <tr>
        <td>{{ $filme['nome'] }}</td>
        <td>{{ $filme['idade'] }}</td>
        <td><a href="{{ route('filmes.apagar', $filme['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection 