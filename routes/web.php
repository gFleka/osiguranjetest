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
    return view('welcome');
});

Route::get('/', [
	'as' => '/',
	'uses' => 'PagesController@getIndex']);

Route::get('about', [
	'as' => 'about',
	'uses' => 'PagesController@getAbout']);

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('admin', function(){
	return view('pages.admin');
});

Route::get('help', function () {
    return view('pages.help');
});

Route::get('test', function () {
    return view('pages.test');
});

Route::get('polica', array('as' => 'polica', 'uses' => 'PolicaController@index'))->middleware('auth');
Route::post('polica', array('as' => 'polica', 'uses' => 'PolicaController@store'))->middleware('auth');

//Testni dio za komunikaciju sa eurohercom
Route::resource('json','TestJSONController');
Route::get('ehsession', ['as' => 'ehsession', 'uses' => 'TestJSONController@session']);


// Kraj testnog djela Euroherc
Route::resource('client','ClientController');
Auth::routes();

Route::get('/home', 'HomeController@index');

