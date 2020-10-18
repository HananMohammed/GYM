<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Front web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() { return view('front.homepage.index');})->name('homepage');

Route::get('/about' , function (){ return view('front.about.index'); })->name('about');

