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
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/events','PagesController@events');
Route::get('/gallery','PagesController@gallery');
Route::get('/blog','PagesController@blog');
Route::get('/sermons','PagesController@blog');
Route::get('/word','PagesController@sermons');
Route::get('/addevent','PagesController@addevent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
