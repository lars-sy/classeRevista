<p><a href="{{ route('revistas.create') }}"> Inserir nova Revista</a></p>

<hr>


@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif


<h1>Lista de Revistas</h1>
@foreach (@$revistas as $revista )
        <p>{{ $revista->nome }}</p>
        <p>
            <a href="{{ route('revistas.show', $revista->id) }}">[Ver detalhes]</a>
        </p>
@endforeach

<hr>
