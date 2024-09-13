@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif


{{-- <form method="post" action="{{ route('usuarios.gravar') }}">
    @csrf
    <input type="text" id="nome" name="name" placeholder="Nome" value="{{ old('name') }}">
    <br>
    <input type="email" id="email"  name="email" placeholder="E-mail" value="{{ old('email') }}">
    <br>
    <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
    <br>
    <input type="password" id="password" name="password" placeholder="Senha" value="{{ old('password') }}">
    <br>
    Admin
    <select name="admin">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
    <br>
    <input type="submit" value="Gravar">
</form> --}}


@endsection 
        <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Cadastrar usuario
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('usuarios.gravar') }}">
                @csrf
                <div class="">
                <input type="text" id="nome" name="name" placeholder="Nome" value="{{ old('name') }}">
                <br>
                <input type="email" id="email"  name="email" placeholder="E-mail" value="{{ old('email') }}">
                <br>
                <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
                <br>
                <input type="password" id="password" name="password" placeholder="Senha" value="{{ old('password') }}">
                <br>
                Admin
                <select name="admin">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <br>
                <input type="submit" value="Gravar">
                </div>
                </form>
            </div>
            </div>
                @endsection

