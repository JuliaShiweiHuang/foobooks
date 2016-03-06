<?php

use \Rych\Random\Random; #cooriliate with $random = new Random();

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');

    });


    Route::get('/books', 'BookController@getIndex');
    Route::get('book/create', 'BookController@getCreate');

    Route::post('/book/create', 'BookController@postCreate');

    Route::get('/book/{id}', 'BookController@getShow');

    Route::get('/practice', function() {

        $random = new Random();
        return $random->getrandomString(10);



        // $data = Array('foo' => 'bar');
        //
        // Debugbar::info($data);
        // Debugbar::error('Error!');
        // Debugbar::warning('Watch out…');
        // Debugbar::addMessage('Another message', 'mylabel');
        //
        // return 'Practice';



        // echo 'app.url: '.config('app.url');
        // echo '<br>app.env: '.config('app.env');

        // return '';
    });

});
