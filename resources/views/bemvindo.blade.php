<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem-vindo</title>
</head>

<body>
    <div style="
        display: flex;
        flex-direction: row"
    >
        @foreach ($pessoas as $itens)
            @component('components.avatar')
                @slot('image')
                    {{$itens['image']}}
                @endslot
                @slot('nome')
                    {{$itens['nome']}}
                @endslot
                @slot('idade')
                    {{$itens['idade']}}
                @endslot
                @slot('birth')
                    {{$itens['birth']}}
                @endslot
            @endcomponent
        @endforeach
    </div>
    

</body>

</html>
