<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel primi passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            header {
                text-align: center;
            }
            a {
                margin: 0 20px;
            }
            a:hover{
                color: red
            }

        </style>
    </head>
    <body>
        <header>
            <h1>Home</h1>
            <h2>Benvenuto nella classe 59</h2>
            <nav>
                <a href="{{route('insegnanti')}}">scopri quali sono gli insegnanti</a>
                <a href="{{route('studenti')}}">scopri quali sono gli studenti</a>
            </nav>
        </header>

    </body>
</html>