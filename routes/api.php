<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*
* Book
*/
Route::resource('books', 'Book\BookController');
Route::resource('books.pops', 'Book\BookPopController', ['only' => ['index']]);

/*
* Pop
*/
Route::resource('pops', 'Pop\PopController');

/*
* User
*/
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
Route::name('verify')->get('users/verify/{token}', 'User\UserController@verify');
Route::name('resend')->get('users/{user}/resend', 'User\UserController@resend');

