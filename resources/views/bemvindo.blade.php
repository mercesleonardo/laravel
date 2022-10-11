<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem-vindo</title>
</head>
<body>
    
    
    {{-- @for($i =0; $i< count($ingredientes); $i++)
        <p>{{$ingredientes[$i]}}</p>
    @endfor --}}

    @foreach ($ingredientes as $ing)
        <p>
            {{$ing}} - 
            @component('components.botao')
                @slot('href')
                http://google.com.br
                @endslot
                @slot('cor')
                    #00FF
                @endslot
                EDITAR
            @endcomponent
            @component('components.botao')
            @slot('href')
            http://youtube.com.br
            @endslot
                @slot('cor')
                    #FF0000
                @endslot
                DELETAR
            @endcomponent
        </p>
    @endforeach
    


</body>
</html>