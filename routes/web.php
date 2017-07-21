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

Route::name('posts_path')->get('/posts', 'PostController@index');

Route::name('create_post_path')->get('/posts/crear','PostController@crear');
Route::name('store_post_path')->post('/post', 'PostController@store');

Route::name('post_path')->get('/posts/{post}', 'PostController@show');





