<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mypage', "App\\Http\\Controllers\\PostsController@index");

Route::get('contacts', "App\\Http\\Controllers\\ContactsController@index");

Route::get('about', "App\\Http\\Controllers\\AboutController@index");

Route::get('price', "App\\Http\\Controllers\\PriceController@index");

Route::get('items', "App\\Http\\Controllers\\ItemsController@index");

Route::get('cart', "App\\Http\\Controllers\\CartController@index");

Route::get('policy', 'App\\Http\\Controllers\\PolicyController@index');

Route::get('posts', 'App\\Http\\Controllers\\PostsController@index');
Route::get('posts/create', 'App\\Http\\Controllers\\PostsController@create');
Route::get('posts/update', 'App\\Http\\Controllers\\PostsController@update');
Route::get('posts/delete', 'App\\Http\\Controllers\\PostsController@delete');
