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
Route::get('/links', 'PagesController@useful_links')->name('app::educational.links');
Route::get('/history', 'PagesController@showHistoryOfContests')->name('app::local.history');
Route::get('/local/rules', 'PagesController@showLocalRules')->name('app::local.rules');


Route::get('/2016/register', 'ContestController@showContestRegistrationForm')->name('app::contest.register');
Route::post('/2016/register', 'ContestController@saveTeam')->name('app::contest.register_post');

Route::get('/2016/register/online', 'ContestController@showOnLineRegistrationForm')->name('app::contest.register.online');
Route::post('/2016/register/online', 'ContestController@saveOnlineContestSubmission')->name('app::contest.register.online_post');

Route::get('/live', 'LiveController@showFeed')->name('app::live.feed');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('app::admin');
Route::get('/home/live', 'HomeController@showLiveAdmin')->name('app::admin.live');
Route::get('/home/live/new', 'HomeController@newLivePost')->name('app::admin.live.new');
Route::post('/home/live/new', 'HomeController@saveLivePost')->name('app::admin.live.new.save');
Route::get('/home/live/edit/{LivePost}', 'HomeController@showPostEditForm')->name('app::admin.live.edit');
Route::post('/home/live/edit/{LivePost}', 'HomeController@editPost')->name('app::admin.live.edit.save');