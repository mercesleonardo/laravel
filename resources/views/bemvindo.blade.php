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
                
            @endcomponent
        </p>
    @endforeach
    


</body>
</html>