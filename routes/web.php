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

Route::get('mypage', "App\\Http\\Controllers\\MyPlaceController@index");

Route::get('contacts', "App\\Http\\Controllers\\Contacts@index");

Route::get('about', "App\\Http\\Controllers\\About@index");

Route::get('price', "App\\Http\\Controllers\\Price@index");

Route::get('items', "App\\Http\\Controllers\\Items@index");

Route::get('cart', "App\\Http\\Controllers\\Cart@index");

Route::get('policy', 'App\\Http\\Controllers\\Policy@index');
