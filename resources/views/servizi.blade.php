<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Servizi - Calisthenics Lab</title>

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

<main class="container py-5">

    <div class="text-center mb-5">

        <span class="text-primary fw-bold">
            SERVIZI
        </span>

        <h1 class="display-5 fw-bold mt-2">
            Tutto ciò che serve per iniziare
        </h1>

        <p class="lead text-secondary">
            Risorse pensate per chi vuole migliorare nel calisthenics.
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <div class="card-body">
                    <h2 class="h4 fw-bold">Guide</h2>

                    <p class="text-secondary">
                        Guide pratiche sui principali esercizi
                        del calisthenics.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <div class="card-body">
                    <h2 class="h4 fw-bold">Allenamento</h2>

                    <p class="text-secondary">
                        Consigli per costruire forza e migliorare
                        progressivamente le proprie abilità.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <div class="card-body">
                    <h2 class="h4 fw-bold">Tecnica</h2>

                    <p class="text-secondary">
                        Approfondimenti sulla tecnica degli esercizi
                        e sul controllo del corpo.
                    </p>
                </div>
            </div>
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