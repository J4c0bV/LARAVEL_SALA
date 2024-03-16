<h2>Bem vindo ao index</h2>

@foreach ($varContatos as $varContato)
    <p>Nome: {{$varContato['nome']}}</p>
    <p>Numero: {{$varContato['cel']}}</p>
@endforeach