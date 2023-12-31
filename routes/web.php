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

Route::get('contacts', "App\\Http\\Controllers\\ContactsController@index")->name('contact.index');
Route::get('about', "App\\Http\\Controllers\\AboutController@index")->name('about.index');
Route::get('price', "App\\Http\\Controllers\\PriceController@index");

Route::get('employers', "App\\Http\\Controllers\\EmployersController@index")->name('employers.index');
Route::get('employers/create', "App\\Http\\Controllers\\EmployersController@create")->name('employers.create');
Route::post('employers', "App\\Http\\Controllers\\EmployersController@store")->name('employers.store');
Route::get('employers/{employee}', "App\\Http\\Controllers\\EmployersController@show")->name('employers.show');
Route::get('employers/{employee}/edit', "App\\Http\\Controllers\\EmployersController@edit")->name('employers.edit');
Route::patch('employers/{employee}', "App\\Http\\Controllers\\EmployersController@update")->name('employers.update');
Route::delete('employers/{employee}', "App\\Http\\Controllers\\EmployersController@destroy")->name('employers.destroy');

Route::get('items', "App\\Http\\Controllers\\ItemsController@index")->name('item.index');
Route::get('cart', "App\\Http\\Controllers\\CartController@index");
Route::get('policy', 'App\\Http\\Controllers\\PolicyController@index')->name('policy.index');
Route::get('main', 'App\\Http\\Controllers\\MainController@index')->name('main.index');

Route::get('posts', 'App\\Http\\Controllers\\PostsController@index')->name('post.index');
Route::get('posts/create', 'App\\Http\\Controllers\\PostsController@create')->name('post.create');
Route::post('posts', 'App\\Http\\Controllers\\PostsController@store')->name('post.store');
Route::get('/posts/{post}', 'App\\Http\\Controllers\\PostsController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'App\\Http\\Controllers\\PostsController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'App\\Http\\Controllers\\PostsController@update')->name('post.update');
Route::delete('/posts/{post}', 'App\\Http\\Controllers\\PostsController@destroy')->name('post.delete');
Route::get('posts/delete', 'App\\Http\\Controllers\\PostsController@delete');
Route::get('posts/restore', 'App\\Http\\Controllers\\PostsController@restore');
Route::get('posts/first-or-create', 'App\\Http\\Controllers\\PostsController@firstOrCreate');
Route::get('posts/update-or-create', 'App\\Http\\Controllers\\PostsController@updateOrCreate');
