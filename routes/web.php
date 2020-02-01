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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// CRUD
// Routing: create / edit / list

Route::get('/posts/admin', 'PostController@admin')->middleware('auth');
Route::resource('/posts', 'PostController')->middleware('auth');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');

// Category

Route::resource('categories', 'CategoryController')->except('show')->middleware('auth');
//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
