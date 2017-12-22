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

Route::get('/','bookController@index')->name('home');
Route::get('/book/{book}','bookController@show');
Route::post('/books','bookController@store');


Route::get('/books/create', function(){
  return view('add');
});
Route::get('/register','registrationController@create');

//Route::get('/login','sessionsController@create');
//Route::post('/','sessionsController@store');

Route::get('/logout','sessionsController@destroy');


Route::post('/register','registrationController@store');

Route::get('/sidebar', function(){
  return view('partials.sidebar');
});
