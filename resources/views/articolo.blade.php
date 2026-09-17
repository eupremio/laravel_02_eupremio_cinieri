<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $articolo['titolo'] }}</title>
</head>
<body>

    <div class="container">

        <nav>
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
            <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
        </nav>

        <article class="article-card">

            <h1 class="article-title">
                {{ $articolo['titolo'] }}
            </h1>

            <p class="page-text">
                {{ $articolo['contenuto'] }}
            </p>

            <a class="article-link" href="{{ route('home') }}">
                Torna alla homepage
            </a>

        </article>

    </div>

</body>
</html>