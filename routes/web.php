<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('app::index');

Route::get('/about', function () {
    return view('pages.about');
})->name('app::about');

Route::get('/rules', function () {
    return view('pages.rules');
})->name('app::rules');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('app::profile');
