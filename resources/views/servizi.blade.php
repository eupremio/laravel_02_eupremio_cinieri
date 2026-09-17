<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Servizi</title>
</head>
<body>

    <div class="container">

        <nav>
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
            <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
        </nav>

        <h1 class="page-title">Servizi</h1>

        <p class="page-text">
            Scopri i servizi disponibili sul nostro blog.
        </p>

        <ul class="services">
            <li>Programmi di allenamento</li>
            <li>Consigli sugli esercizi</li>
            <li>Guide per principianti</li>
        </ul>

    </div>

</body>
</html>