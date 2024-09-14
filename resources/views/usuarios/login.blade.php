@extends('base')

@section('titulo', 'Login')

@section('conteudo')
<div class="container mt-5">
    @if($errors->any())
        <div class="alert alert-danger">
            <h4>Preencha o formulário</h4>
            @foreach($errors->all() as $erro)
                <p>{{ $erro }}</p>
            @endforeach
        </div>  
    @endif

    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input id="usuario" name="username" type="text" class="form-control" required placeholder="Usuário" aria-label="Usuário">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" name="password" type="password" class="form-control" required placeholder="Senha" aria-label="Senha">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control" required placeholder="Email" aria-label="Email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@endsection
