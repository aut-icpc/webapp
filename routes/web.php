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
Route::get('/past', 'PagesController@showPastContests')->name('app::past');


Route::get('2016/contest', 'ContestController@showPreRegistrationPage')->name('app::contest.pre-register');
Route::get('/2016/register', 'ContestController@showContestRegistrationForm')->name('app::contest.register');
Route::get('/2016/registered', 'ContestController@showContestRegisteredTeams')->name('app::contest.registered');
Route::post('/2016/register', 'ContestController@saveOnSiteRegistration')->name('app::contest.register_post');

Route::get('/2016/register/online', 'ContestController@showOnLineRegistrationForm')->name('app::contest.register.online');
Route::post('/2016/register/online', 'ContestController@saveOnlineContestSubmission')->name('app::contest.register.online_post');

Route::get('/live', 'LiveController@showFeed')->name('app::live.feed');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('app::admin');
Route::get('/home/registrations', 'HomeController@showRegistrations')->name('app::admin.registrations.show')->middleware('admin');
Route::get('home/registrations/{team}', 'HomeController@showEditRegistrationForm')->name('app::admin.registration.edit')->middleware('admin');
Route::post('home/registrations/{team}', 'HomeController@saveRegistration')->name('app::admin.registration.save')->middleware('admin');
Route::get('home/registrations/{team}/delete', 'HomeController@removeRegistration')->name('app::admin.registration.delete')->middleware('admin');
Route::get('/home/live', 'HomeController@showLiveAdmin')->name('app::admin.live')->middleware('admin');
Route::get('/home/live/new', 'HomeController@newLivePost')->name('app::admin.live.new')->middleware('admin');
Route::post('/home/live/new', 'HomeController@saveLivePost')->name('app::admin.live.new.save')->middleware('admin');
Route::get('/home/live/edit/{LivePost}', 'HomeController@showPostEditForm')->name('app::admin.live.edit')->middleware('admin');
Route::post('/home/live/edit/{LivePost}', 'HomeController@editPost')->name('app::admin.live.edit.save')->middleware('admin');