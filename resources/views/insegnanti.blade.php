<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insegnanti</title>

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

        main h2 {
            text-align: center;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{route('home')}}">Torna alla Home</a>
            <a href="{{route('studenti')}}">scopri quali sono gli studenti</a>
        </nav>
    </header>

    <main>
        <h2>Lista insegnanti:</h2>
        <ul>
            @foreach ($lista_insegnanti as $nome_insegnante)
                <li>{{ $nome_insegnante }}</li>        
            @endforeach
        </ul> 
    </main>
    
</body>
</html>