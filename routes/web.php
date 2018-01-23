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

Route::get('/', 'postController@index')->name('home'); //rename the route as home

Route::get('/posts/create','postController@create');

Route::post('/posts','PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@create');

Route::post('/signin','SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/posts/tags/{tag}', 'TagsController@index');




