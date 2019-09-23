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

Route::get('/beranda','ProjectController@index'); 
Route::get('/about','ProjectController@about');
Route::get('/create','ProjectController@create'); 
Route::get('/library','ProjectController@library');
Route::get('/buku','ProjectController@book'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
