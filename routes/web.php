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

Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::post('/users', 'UsersController@store');
Route::get('/users/{id}/edit','UsersController@edit');
Route::patch('/users/{id}','UsersController@update');
Route::get('/users/hapus{id}','UsersController@hapus');
Route::get('/users','UsersController@index');
Route::get('/users/cari','UsersController@cari');




Route::get('/upload','UploadController@upload');
Route::post('/upload/proses','UploadController@proses_upload');
Route::get('/upload/hapus/{id}','UploadController@hapus');
Route::get('/upload/cari','UploadController@cari');

Route::get('/welcome','WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
