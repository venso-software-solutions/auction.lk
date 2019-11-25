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
Route::get('/item2', function () {
    return view('item2');
});
Route::get('/item3', function () {
    return view('item3');
});
Route::get('/item4', function () {
    return view('item4');
});
Route::get('/item5', function () {
    return view('item5');
});
Route::get('/item6', function () {
    return view('item6');
});
Route::get('/item7', function () {
    return view('item7');
});
Route::get('/item8', function () {
    return view('item8');
});
Route::get('/item9', function () {
    return view('item9');
});
Route::get('/item10', function () {
    return view('item10');
});
Route::get('/item11', function () {
    return view('item11');
});
Route::get('/item12', function () {
    return view('item12');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/areaAgent', function () {
    return view('areaAgent');
});

Route::get('/insuranceAgent', function () {
    return view('insuranceAgent');
});

Route::get('/leasingAgent', function () {
    return view('leasingAgent');
});
Route::get('/membership', function () {
    return view('membership');
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
Route::get('/productCopy', function () {
    return view('productCopy');
});

Route::get('/carosal', function () {
    return view('carosal');
});

Route::get('/contactLeasingOfficerForm', function () {
    return view('contactLeasingOfficerForm');
});

Route::get('/leasingOfficerButton', function () {
    return view('leasingOfficerButton');
});



