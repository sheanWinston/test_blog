<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TestController@index');

Route::get('/user/winston', 'TestController@users');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/add-post', 'add_post')->name('add-post');
Route::post('/add-post', 'PostController@upload')->name('upload-post');

Route::get('/post/{title}/{id}', 'PostController@view')->name('post.view');
Route::put('/edit-post/{post}', 'PostController@update')->name('post.update');
