<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('posts')->group(function (){
	Route::get('/', 'PostsController@index')->name('posts');
	Route::get('/create', 'PostsController@create')->name('posts.create');
	Route::get('/edit/{id}', 'PostsController@edit')->name('posts.edit');
	Route::post('/store', 'PostsController@store')->name('posts.store');
	Route::post('/update/{id}', 'PostsController@store')->name('posts.update');
	Route::get('/delete/{id}', 'PostsController@destroy')->name('posts.delete');
});

Route::prefix('voices')->group(function (){
	Route::get('/', 'VoicesController@index')->name('voices');
	Route::get('/create', 'VoicesController@create')->name('voice.create');
	Route::get('/edit/{id}', 'VoicesController@edit')->name('voice.edit');
	Route::post('/store', 'VoicesController@store')->name('voice.store');
	Route::post('/update/{id}', 'VoicesController@update')->name('voice.update');
	Route::get('/delete/{id}', 'VoicesController@destroy')->name('voice.delete');
});

Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('media')->group(function (){
	Route::get('/', 'MediaController@index')->name('media');
	
});
Route::post('/upload', 'MediaController@store')->name('uploadmedia');
Route::post('uploadavatar', 'ProfileController@upload_avatar')->name('uploadavatar');

Route::post('upload', 'ProfileController@upload')->name('upload');




Auth::routes();


