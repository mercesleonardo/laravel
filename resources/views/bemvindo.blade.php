<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem-vindo</title>
</head>
<body>
    <!--
    <h1>Bem-vindo, {{$apelido_nome}}</h1>
    <h2> 1 + 1 é: {{1+1}}</h2>
    <h3>O código é: {{--funcao()--}}</h3>
    <p>Código HTML: {{$html}}</p>
    <p>Código HTML interpretado: {!!$html!!}</p>
    -->
    <h1>{{$apelido_nome == 'Jessica' ? 'Sim': 'Não'}} </h1>

    <span>O usuário é {{$apelido_nome}}?</span>
    @if($apelido_nome == 'Leonardo')
        <h1>Sim</h1>
    @else
        <h1>Não</h1>
    @endif

</body>
</html>