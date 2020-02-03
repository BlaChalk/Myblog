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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/posts/admin', 'PostController@admin');
    Route::get('/posts/{post}/showByAdmin', 'PostController@showByAdmin');
    Route::resource('/posts', 'PostController');
    Route::resource('/categories', 'CategoryController')->except('show');
    Route::resource('/tags', 'TagController')->only(['index', 'destroy']);
});

// Post
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');

// Category
Route::get('/posts/category/{category}', 'PostController@indexWithCategory');

// Tags
Route::get('/posts/tag/{tag}', 'PostController@indexWithTag');
//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
