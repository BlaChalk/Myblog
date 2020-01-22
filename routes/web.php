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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'about';
});

Route::get('/content', function () {
    print("content");
});

Route::get('/page', function () {
    print("page");
});

Route::get('/posts/{id}', function ($id) {
    return 'single post: '.$id;
});
