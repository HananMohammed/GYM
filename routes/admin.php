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
    Route::get('skills/edit','SkillsController@edit' )->name('skills.edit');
    Route::put('skills/update','SkillsController@update' )->name('skills.update');
    Route::resource('cards' ,'CardController');
    Route::resource('gallaries' ,'GallaryController');
    Route::get('offers/edit' ,'OfferController@edit')->name('offers.edit');
    Route::put('offers/update' ,'OfferController@update')->name('offers.update');
    Route::resource('/services-category' ,'ServicesCategoryController' );
    Route::resource('services' ,'ServiceController') ;
    Route::resource('opinions' ,'OpinionController') ;

});

