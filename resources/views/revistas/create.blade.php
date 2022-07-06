<div>
    <h1>CADASTRO DE REVISTAS</h1>
    <form method="post" action="{{ route('revistas.store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token() }}">

        <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{old('nome')}}">
        <p>Editora: <input type="text" name="editora" id="editora" placeholder="Digite a editora" value="{{old('editora') }}">
        <p>Número: <input type="text" name="numero" id="numero" placeholder="Digite o numero" value="{{old('numero')}}">
        <p>Mês: <input type="text" name="mes" id="mes" placeholder="Digite o mês" value="{{old('mes') }}">
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite ano" value="{{old('ano') }}">
        <p> <button type="submit"> Cadastrar</button>
    </form>

    <a href=" {{ route('revistas.index') }}"><button>Voltar</button></a>
</div>
