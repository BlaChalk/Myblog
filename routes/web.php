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

Route::get('/posts/admin', 'PostController@admin');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/show/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::put('/posts/{post}', 'PostCOntroller@update');
Route::delete('/posts/{post}', 'PostController@destroy');


Route::get('/posts/{post}/edit', 'PostController@edit');
Route::get('/posts', 'PostController@index');


// Route::get('/posts', function () {
//     $posts= [1,2,3,4,5];
//     return view('posts.list', ['posts'=>$posts]);
// });

// Route::get('/posts/{id}', function ($id) {
//     return view('posts.show');
// });
