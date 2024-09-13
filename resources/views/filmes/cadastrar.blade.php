{{-- <form method="post" action="{{ route('filmes.gravar') }}">
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
</form> --}}




            @extends('base')

            @section('titulo', 'Cadastrar | Filmes para cadastro')

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
            <div class="flex flex-wrap">
            <div class="w-full  my-6 pr-0 ">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Cadastre seu animal
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data" action="{{ route('filmes.gravar') }}">
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
                                                        
                            </div>
                            </div>
                            @endsection
                            