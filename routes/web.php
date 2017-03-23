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
//Activity
Route::get('/start', 'StudentsController@home');
Route::get('/register', 'StudentsController@toRegister');
Route::post('/submit', 'StudentsController@save');
Route::get('/edit/{id}', 'StudentsController@toEdit');
Route::post('/saveEdit', 'StudentsController@toUpdate');
Route::get('/delete/{id}', 'StudentsController@toDelete');

//Final Project
Route::get('/home', 'AnimeController@home');
Route::get('/Animeinfo', 'AnimeController@addNew');
Route::post('/push', 'AnimeController@saveAnime');
Route::get('/next/{id}', 'AnimeController@nextPage');
Route::get('/back', 'AnimeController@home');
Route::get('/video/{id}', 'AnimeController@trailer');
Route::get('/tBack/{id}', 'AnimeController@nextPage');
Route::get('/edit/{id}', 'AnimeController@doEdit');
Route::post('/toEdit', 'AnimeController@saveEdit');


//auth
Route::get('login', array('uses' => 'AnimeController@showLogin'));

Route::post('login', array('uses' => 'AnimeController@doLogin'));
