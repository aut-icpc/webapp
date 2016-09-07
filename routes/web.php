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

Route::get('/', 'PagesController@index')->name('app::index');
Route::get('/about', 'PagesController@about')->name('app::general.about');
Route::get('/rules', 'PagesController@rules')->name('app::general.rules');
Route::get('/faq', 'PagesController@faq')->name('app::general.faq');
Route::get('/contact', 'PagesController@contact')->name('app::general.contact');
Route::get('/links', 'PagesController@useful_links')->name('app::educational:links');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('app::profile');
