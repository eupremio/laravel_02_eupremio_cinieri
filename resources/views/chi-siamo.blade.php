<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Chi siamo</title>
</head>
<body>

    <div class="container">

        <nav>
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
            <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
        </nav>

        <h1 class="page-title">Chi siamo</h1>

        <p class="page-text">
            Siamo un blog dedicato al calisthenics e all'allenamento a corpo libero.
            Condividiamo informazioni e consigli per migliorare forza e controllo.
        </p>

    </div>

</body>
</html>