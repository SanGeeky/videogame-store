<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::resources([
        'characters' => 'VG\CharacterController',
        'companies' => 'VG\CompanyController',
        '/' => 'VG\GameController',
        'games' => 'VG\GameController',
        'genres' => 'VG\GenreController',
        'platforms' => 'VG\PlatformController',
        'reviews' => 'VG\ReviewController',
        'codes' => 'VG\CodeController',

    ]);
    Route::put('purchase', 'VG\CodeController@purchase')->name('purchase');

});
