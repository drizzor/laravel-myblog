<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

/** Posts Routes */
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/{post:slug}', 'PostsController@show')->name('posts.show');

/** Comment Routes */
Route::post('/posts/{post:slug}/comments', 'CommentsController@store')->name('comments.store');

/** Contact Routes */
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

/** Login Routes */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
