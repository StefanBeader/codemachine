<?php

Auth::routes();

Route::get('/', 'PageController@home');

Route::post('/contactMessage', 'MessageController@contact');

Route::post('/storeEmail', 'MessageController@storeEmail');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
});