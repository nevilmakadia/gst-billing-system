<?php

use Illuminate\Support\Facades\Route;

// Default Route
// Route::get('/', function () {
//     return view('welcome');
// });

// Controller Route
Route::get('/', 'App\Http\Controllers\AppController@index');
Route::get('/about-us', 'App\Http\Controllers\AppController@about');
