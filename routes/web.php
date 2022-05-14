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
});


Route::get('/halamanutama', function () {
    return view('halamanutama');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/layananpemberkatanjenazah', function () {
    return view('lynpemberkatanjenazah');
});

Route::get('/layananbaptis', function () {
    return view('lynbaptis');
});

Route::get('/jadwalromo', function () {
    return view('jadwalromo');
});

Route::get('/kegiatandpp', function () {
    return view('kegiatandpp');
});

Route::get('/inputjadwalromo', function () {
    return view('inputjadwalromo');
});