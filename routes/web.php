<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('store');
    return view('home', ['comics' => $comics]);
});

Route::get('/home', function () {
    $comics = config('store');
    return view('home', ['comics' => $comics]);
});


Route::get('/about', function () {
    return view('about');
});
