<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $articolo['titolo'] }} - Calisthenics Lab</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Calisthenics Lab
        </a>

        <a class="btn btn-outline-light" href="{{ route('home') }}">
            Home
        </a>

    </div>
</nav>

<header class="article-header py-5">

    <div class="container py-4">

        <span class="badge text-bg-primary mb-3">
            {{ $articolo['categoria'] }}
        </span>

        <h1 class="display-4 fw-bold">
            {{ $articolo['titolo'] }}
        </h1>

    </div>

</header>

<main class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <img
                src="{{ $articolo['immagine'] }}"
                class="img-fluid rounded-4 shadow-sm mb-5"
                alt="{{ $articolo['titolo'] }}"
            >

            <p class="fs-4 lh-lg">
                {{ $articolo['contenuto'] }}
            </p>

            <a
                href="{{ route('home') }}"
                class="btn btn-dark mt-4"
            >
                ← Torna agli articoli
            </a>

        </div>

    </div>

</main>

<footer class="footer py-4 mt-5">
    <div class="container text-center">
        <p class="mb-0">
            Calisthenics Lab · Allenamento a corpo libero
        </p>
    </div>
</footer>

</body>
</html>