<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'dashboard'], function(){
    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('admin.index');

    })->name('dashboard');

    Route::get('/profile','UserProfileController@show' )->name('profile');
    Route::post("/profile-information" , "ProfileInformationController@update")->name('user-profile-information.update');
    Route::get('sliders/edit','SliderController@edit' )->name('sliders.edit');
    Route::put('sliders/update','SliderController@update' )->name('sliders.update');
    Route::get('abouts/edit','AboutController@edit' )->name('about.edit');
    Route::put('abouts/update','AboutController@update' )->name('about.update');
    Route::resource('cards' ,'CardController');

});

