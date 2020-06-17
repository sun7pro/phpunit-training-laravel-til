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

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// TODO: move to controller
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// TODO: move to controller
Route::post('/login', function () {
    return Response::make('Login');
})->name('login');
