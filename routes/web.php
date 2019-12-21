<?php

Route::get('/', function () {
    return view('home');
});

Route::resources([
    'characters' => 'VG\CharacterController',
    'companies' => 'VG\GameController',
    'games' => 'VG\GameController',
    'genres' => 'VG\GenreController',
    'platforms' => 'VG\PlatformController',
    'reviews' => 'VG\ReviewController',
]);