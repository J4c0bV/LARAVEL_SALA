<h2>Bem vindo ao index</h2>

@foreach ($varTemas as $varTema)
    <p>Tema: {{$varTema['tema']}}</p>
    <p>Titulo: {{$varTema['titulo']}}</p>
@endforeach