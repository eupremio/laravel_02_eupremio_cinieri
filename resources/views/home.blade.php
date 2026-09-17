<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calisthenics Lab</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Calisthenics Lab
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chi-siamo') }}">
                        Chi siamo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servizi') }}">
                        Servizi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero py-5">
    <div class="container py-5">
        <div class="hero-content">
            <span class="badge text-bg-light mb-3">
                CALISTHENICS BLOG
            </span>

            <h1 class="display-3 fw-bold">
                Costruisci forza.<br>
                Controlla il tuo corpo.
            </h1>

            <p class="lead mt-4">
                Guide, esercizi e consigli dedicati al mondo
                dell'allenamento a corpo libero.
            </p>
        </div>
    </div>
</section>

<main class="container py-5">

    <div class="mb-5">
        <span class="text-primary fw-bold">DAL BLOG</span>

        <h2 class="display-6 fw-bold mt-2">
            Gli ultimi articoli
        </h2>
    </div>

    <div class="row g-4">

        @foreach ($articoli as $articolo)
            <div class="col-md-6 col-lg-4">

                <article class="card article-card h-100 border-0 shadow-sm">

                    <img
                        src="{{ $articolo['immagine'] }}"
                        class="card-img-top article-image"
                        alt="{{ $articolo['titolo'] }}"
                    >

                    <div class="card-body p-4">

                        <span class="badge text-bg-primary mb-3">
                            {{ $articolo['categoria'] }}
                        </span>

                        <h3 class="h4 fw-bold">
                            {{ $articolo['titolo'] }}
                        </h3>

                        <p class="text-secondary">
                            {{ $articolo['contenuto'] }}
                        </p>

                        <a
                            href="{{ route('articolo', ['id' => $articolo['id']]) }}"
                            class="btn btn-dark"
                        >
                            Leggi articolo
                        </a>

                    </div>

                </article>

            </div>
        @endforeach

    </div>

</main>

<footer class="footer py-4">
    <div class="container text-center">
        <p class="mb-0">
            Calisthenics Lab · Allenamento a corpo libero
        </p>
    </div>
</footer>

</body>
</html>