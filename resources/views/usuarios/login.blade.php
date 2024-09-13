@extends('base')

@section('titulo', 'Login')

@section('conteudo')



@if($errors->any())
<div>
    <h4>Preencha o formulário</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form method="post" action="{{route('login')}}" >
    @csrf
    <div class="">
        <label for="usuario">Usuário</label>
        <input  id="usuario" name="username" type="text" required="" placeholder="Usuário" aria-label="Usuário">
    </div>
    <div class="">
        <label for="password">Senha</label>
        <input class="" id="password" name="password" type="text" required="" placeholder="Senha" aria-label="password">
    </div>
    <div class="">
        <label for="email">Email</label>
        <input class="" id="email" name="email" type="email" required="" placeholder="email" aria-label="email">
    </div>
    <div class="">
        <button class="" type="submit">Enviar</button>
    </div>
    
    
   
</form>

@endsection