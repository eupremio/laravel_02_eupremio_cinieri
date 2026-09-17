<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Home - Calisthenics Blog</title>
</head>
<body>

    <div class="container">

        <nav>
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
            <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
        </nav>

        <h1 class="page-title">Calisthenics Blog</h1>

        <p class="page-text">
            Un blog dedicato all'allenamento a corpo libero.
        </p>

        <h2>Articoli</h2>

        <div class="articles">
            @foreach ($articoli as $articolo)
                <article class="article-card">
                    <h3 class="article-title">{{ $articolo['titolo'] }}</h3>

                    <a
                        class="article-link"
                        href="{{ route('articolo', ['id' => $articolo['id']]) }}"
                    >
                        Leggi l'articolo
                    </a>
                </article>
            @endforeach
        </div>

    </div>

</body>
</html>