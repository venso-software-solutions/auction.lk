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
Route::get('/item1', function () {
    return view('item1');
});

Route::get('/areaAgent', function () {
    return view('areaAgent');
});

Route::get('/insuranceAgent', function () {
    return view('insuranceAgent');
});

Route::get('/leasingAgent', function () {
    return view('pamal');
});
Route::get('/membershipAgent', function () {
    return view('pamal');
});

Route::get('/buynow', function () {
    return view('buynow');
});
Route::get('/promoteAdd', function () {
    return view('promoteAdd');
});
Route::get('/areaAgentForm', function () {
    return view('areaAgentForm');
});
Route::get('/leasingAgentForm', function () {
    return view('leasingAgentForm');
});
Route::get('/insuranceAgentForm', function () {
    return view('insuranceAgentForm');
});
