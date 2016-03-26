<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/loremipsum', 'LoremIpsumController@postIndex');
    Route::get('/loremipsum', 'LoremIpsumController@getIndex');

    Route::post('/randomuser', 'RandomUserController@postIndex');
    Route::get('/randomuser', 'RandomUserController@getIndex');

    Route::get('/practice', function() {
        echo config('app.url');
    });
});
