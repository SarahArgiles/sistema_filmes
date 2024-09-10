
@extends('base')

@section('titulo', 'Apagar | Usuarios')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em>{{ $usuario['nome'] }}</em></p>

<form action="{{ route('usuarios.apagar', $filme['id']) }}" method="post">
@method('delete')
@csrf

<input type="submit" value="Pode apagar sem medo" style="background-color:red;color:white;">

</form>

<a href="{{ route('usuarios') }}">Cancelar</a>
@endsection