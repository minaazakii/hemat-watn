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
Route::get('/market', function () {
    return view('market');
});
Route::get('/offers', function () {
    return view('offers');
});
Route::get('/platform', function () {
    return view('platform');
});
Route::get('/preview', function () {
    return view('preview');
});


