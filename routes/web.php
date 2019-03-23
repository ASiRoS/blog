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

Auth::routes();

Route::resource('articles', 'ArticleController')->middleware('auth');
Route::get('/', 'ArticleController@index')->name('home');
Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

Route::post('comments/store/{article}', 'CommentController@store')->middleware('auth')->name('comments.store');