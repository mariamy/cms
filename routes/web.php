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

Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('media')->group(function (){
	Route::get('/', 'MediaController@index')->name('media');
	
});
Route::post('/upload', 'MediaController@store')->name('uploadmedia');
Route::post('uploadavatar', 'ProfileController@upload_avatar')->name('uploadavatar');




Auth::routes();


