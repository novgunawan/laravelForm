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
// '/' mewakili alamat localhost 8000
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@toForm');

Route::post('/welcome', 'AuthController@selamatDatang');

