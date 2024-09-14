@extends('base')

@section('titulo', 'Cadastrar | Cadastro de usuários')

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
        <div class="col-lg-6 offset-lg-3">
            <p class="text-xl pb-6">
                <i class="fas fa-list mr-3"></i> Cadastrar usuário
            </p>
            <div class="card p-4 shadow-sm">
                <form method="post" action="{{ route('usuarios.gravar') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="name" class="form-control" placeholder="Nome" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <label for="admin">Admin</label>
                        <select id="admin" name="admin" class="form-control">
                            <option value="0" {{ old('admin') == 0 ? 'selected' : '' }}>Não</option>
                            <option value="1" {{ old('admin') == 1 ? 'selected' : '' }}>Sim</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
