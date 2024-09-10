<form method="post" action="{{ route('usuarios.gravar') }}">
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
</form>
@endsection 
