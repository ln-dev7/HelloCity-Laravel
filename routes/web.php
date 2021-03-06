<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home'); // On donne un nom a notre route pour pouvoir l'utiliser dans les autres fichiers

Route::name('about')->get('/about', function () {
    return view('pages.about');
}); // Similaire a la synthaxe de haut
