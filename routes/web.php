<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::resources([
        'characters' => 'VG\CharacterController',
        'companies' => 'VG\CompanyController',
        'games' => 'VG\GameController',
        'genres' => 'VG\GenreController',
        'platforms' => 'VG\PlatformController',
        'reviews' => 'VG\ReviewController',
    ]);
});


Route::get('/home', 'HomeController@index')->name('home');
