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
//Route::get('vidtest', 'PostController@videoTest');
//Route::get('pictest', 'PostController@picTest');

Route::get('landing', 'NavController@landing');

Route::post('feed/create', 'FeedController@testCreate');
Route::get('feed/{feed}', 'FeedController@view');

Route::post('post/create', 'PostController@testCreate');
Route::get('post/{post}', 'PostController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
