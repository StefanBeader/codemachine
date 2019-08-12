<?php

Auth::routes();

Route::get('/', 'PageController@home');

Route::post('/contactMessage', 'MessageController@contact');
