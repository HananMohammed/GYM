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
Route::get('/contact-us' , function (){ return view('front.contact.index'); })->name('contact');
Route::get('/services/{id}/{title}' ,'ServicesController@services')->name('services.redirect');
Route::post('/send-contact-email', 'ContactController@sendMail')->name('send-contact-email');
