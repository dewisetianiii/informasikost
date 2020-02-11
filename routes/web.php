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


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/rooms', function () {
    return view('frontend.rooms');
});

Route::get('/room-single', function () {
    return view('frontend.room-single');
});

Route::get('/room-single1', function () {
    return view('frontend.room-single1');
});

Route::get('/room-single2', function () {
    return view('frontend.room-single2');
});

Route::get('/room-single3', function () {
    return view('frontend.room-single3');
});

Route::get('/room-single4', function () {
    return view('frontend.room-single4');
});

Route::get('/room-single5', function () {
    return view('frontend.room-single5');
});

Route::get('/blog-single', function () {
    return view('frontend.blog-single');
});

Route::get('/blog-single1', function () {
    return view('frontend.blog-single1');
});

Route::get('/blog-single2', function () {
    return view('frontend.blog-single2');
});

Route::get('/blog-single3', function () {
    return view('frontend.blog-single3');
});

Route::get('/blog-single4', function () {
    return view('frontend.blog-single4');
});

Route::get('/blog-single5', function () {
    return view('frontend.blog-single5');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::resource('kamar', 'KamarController');

Route::resource('parkir', 'ParkirController');

Route::resource('kos', 'KosController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
