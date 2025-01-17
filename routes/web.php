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
  return view('index');
});

Route::get('/blogs', function () {
  return view('blogs');
});

Route::get('blogs/flutter/', function () {
  return view('blogs-flutter');
});

Route::get('blogs/website/', function () {
  return view('blogs-website');
});
