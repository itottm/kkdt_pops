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
* User
*/
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

/*
* Book
*/
Route::resource('books', 'Book\BookController');
Route::resource('books.pops', 'Book\BookPopController', ['only' => ['index']]);

/*
* Pop
*/
Route::resource('pops', 'Pop\PopController');
