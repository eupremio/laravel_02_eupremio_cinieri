<?php

use Illuminate\Support\Facades\Route;

$articoli = [
    [
        'id' => 1,
        'titolo' => 'Come iniziare con il calisthenics',
        'contenuto' => 'Il calisthenics è un allenamento a corpo libero che permette di sviluppare forza, controllo e coordinazione.'
    ],
    [
        'id' => 2,
        'titolo' => 'I benefici delle trazioni',
        'contenuto' => 'Le trazioni sono un esercizio fondamentale per sviluppare la forza della schiena e delle braccia.'
    ],
    [
        'id' => 3,
        'titolo' => 'Come migliorare nelle dip',
        'contenuto' => 'Le dip permettono di allenare soprattutto tricipiti, petto e spalle utilizzando il peso del proprio corpo.'
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