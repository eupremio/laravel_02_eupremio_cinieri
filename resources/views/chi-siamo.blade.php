<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chi siamo - Calisthenics Lab</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Calisthenics Lab
        </a>

        <div>
            <a class="btn btn-outline-light" href="{{ route('home') }}">
                Torna alla Home
            </a>
        </div>

    </div>
</nav>

<main class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <span class="text-primary fw-bold">
                CHI SIAMO
            </span>

            <h1 class="display-5 fw-bold mt-2">
                Un blog dedicato al movimento
            </h1>

            <p class="lead text-secondary mt-4">
                Calisthenics Lab nasce dalla passione per l'allenamento
                a corpo libero e dalla voglia di condividere conoscenze,
                esercizi e tecniche.
            </p>

            <p>
                Il nostro obiettivo è raccogliere contenuti semplici e
                pratici per chi vuole migliorare la propria forza,
                il controllo del corpo e le proprie abilità.
            </p>

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