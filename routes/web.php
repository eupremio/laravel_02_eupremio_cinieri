<?php

use Illuminate\Support\Facades\Route;

$articoli = [
    [
        'id' => 1,
        'titolo' => 'Le trazioni: la base per una schiena forte',
        'categoria' => 'Forza',
        'immagine' => 'https://images.unsplash.com/photo-1598971639058-fab3c3109a00?auto=format&fit=crop&w=1200&q=80',
        'contenuto' => 'Le trazioni sono uno degli esercizi fondamentali del calisthenics. Permettono di sviluppare la forza della schiena, dei bicipiti e degli avambracci utilizzando principalmente il peso del proprio corpo.'
    ],
    [
        'id' => 2,
        'titolo' => 'Come migliorare nelle dip',
        'categoria' => 'Spinta',
        'immagine' => 'https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?auto=format&fit=crop&w=1200&q=80',
        'contenuto' => 'Le dip sono un esercizio completo per la parte superiore del corpo. Con una corretta esecuzione permettono di allenare soprattutto petto, tricipiti e spalle.'
    ],
    [
        'id' => 3,
        'titolo' => 'Il muscle up: forza e tecnica',
        'categoria' => 'Skill',
        'immagine' => 'https://images.unsplash.com/photo-1538805060514-97d9cc17730c?auto=format&fit=crop&w=1200&q=80',
        'contenuto' => 'Il muscle up combina una trazione esplosiva con una fase di spinta. Per raggiungerlo servono forza, coordinazione e una buona tecnica di esecuzione.'
    ]
];

Route::get('/', function () use ($articoli) {
    return view('home', ['articoli' => $articoli]);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi');

Route::get('/articolo/{id}', function ($id) use ($articoli) {
    foreach ($articoli as $articolo) {
        if ($articolo['id'] == $id) {
            return view('articolo', ['articolo' => $articolo]);
        }
    }

    abort(404);
})->name('articolo');