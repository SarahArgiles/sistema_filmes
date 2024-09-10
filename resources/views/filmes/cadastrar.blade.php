<form method="post" action="{{ route('filmes.gravar') }}">
    @csrf
    <input type="text" id="nome" name="nome" placeholder="Nome do fime" value="{{ old('nome') }}">
    <br>
    <input type="text" id="sinopse" name="sinopse" placeholder="Sinopse" value="{{ old('sinopse') }}">
    <br>
    <input type="date" id="ano" name="ano" placeholder="Ano de lançamento" value="{{ old('ano') }}">
    <br>
    <input type="text" id="categoria" name="categoria" placeholder="Categoria" value="{{ old('categoria') }}">
    <br>
    <input type="file" id="imagem" name="imagem" placeholder="Imagem" value="{{ old('imagem') }}">
    <br>
    <input type="text" id="link" name="link" placeholder="Link" value="{{ old('link') }}">
    <br>
    
    <br>
    <input type="submit" value="Gravar">
</form>
 