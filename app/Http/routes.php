<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/books', 'BookController@getIndex');
    Route::get('/book/create', 'BookController@getCreate');
    Route::post('/book/create', 'BookController@postCreate');
    Route::get('/book/show/{title?}', 'BookController@getShow');

    Route::post('/loremipsum', 'LoremIpsumController@postIndex');
    Route::get('/loremipsum', 'LoremIpsumController@getIndex');

    Route::post('/randomuser', 'RandomUserController@postIndex');
    Route::get('/randomuser', 'RandomUserController@getIndex');



    Route::get('/practice', function() {
        echo config('app.url');
    });
});
