<?php
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('inicio/', function () {
        return view('prueba');
    });
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');