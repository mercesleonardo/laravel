<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layouts</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background: #CCC;
            padding: 20px;
            border-bottom: 1px solid #333;
            text-align: center;
        }

        main {
            padding: 20px;
            height: 54vh;
        }

        main h2 {
            text-align: center;
            text-decoration: underline;
        }

        footer {
            padding: 20px;
            background: #333;
            color: #FEFEFE;
            text-align: center;
            bottom: 0;
            position: fixed;
            width: 100vw;
        }
    </style>

</head>
<body>
    <x-nav></x-nav>
    
    <main>
        @yield('content')
    </main>

    <x-footer></x-footer>

</body>
</html>