<?php

Auth::routes();

Route::get('/', 'PageController@home');

Route::post('/contactMessage', 'MessageController@contact');

Route::post('/storeEmail', 'MessageController@storeEmail');
