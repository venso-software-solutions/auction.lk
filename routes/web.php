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

Route::get('/footer', function () {
    return view('footer');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/phone', function () {
    return view('phone');
});

Route::get('/areaAgent', function () {
    return view('areaAgent');
});

Route::get('/pamal', function () {
    return view('pamal');
});

