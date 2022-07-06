<h1>Detalhes da revista {{ $revista->nome }}</h1>

<ul>
    <li>Nome: {{ $revista->nome }}</li>
    <li>Editora: {{ $revista->editora }}</li>
    <li>Número: {{ $revista->numero }}</li>
    <li>Mês: {{ $revista->mes }}</li>
    <li>Ano: {{ $revista->ano }}</li>

</ul>

<form action="{{ route('revistas.destroy', $revista->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit"> Deletar a revista {{ $revista->nome }} </button>
</form>


<a href=" {{ route('revistas.index') }}"><button>Voltar</button></a>
