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

/*
 * Navigation Routes
 */
Route::get('landing', 'NavController@landing');

/*
 * Feed Routes
 */
Route::post('create/feed', 'FeedController@create')->name('feedCreate');
Route::get('feed/{feed}', 'FeedController@view');

/*
 * Post Routes
 */
Route::post('create/{feed}/post', 'PostController@create')->name('postCreate');
Route::get('post/{post}', 'PostController@view');

Auth::routes();
