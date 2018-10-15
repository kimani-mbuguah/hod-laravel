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
Route::get('/contact','PagesController@contact');
Route::get('/posts/all','PagesController@allPosts');
Route::get('/word/all','PagesController@allSermons');
Route::get('/dashboard/devotions/all','PagesController@allDevotions');
//these are routes to blog/events etc
Route::resource('posts','PostsController');
Route::resource('events','EventsController');
Route::resource('messages','MessagesController');
Route::resource('word','SermonsController');
Route::resource('gallery','GalleryController');
Route::resource('/sliderone','SliderOneController');
Route::resource('/slidertwo','SliderTwoController');
Route::resource('/sliderthree','SliderThreeController');
Route::resource('/devotions','DevotionsController');
//comment on post routes
Route::resource('comments','PostCommentsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
