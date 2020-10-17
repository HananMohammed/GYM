<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Traits\ViewData;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.index', function ($view){

             $data =  ViewData::HomepageData();

             $view->with('data' , $data);
        });
        View::composer('front.about.*', function ($view){

            $data =  ViewData::aboutData();

            $view->with('data' , $data);
        });
    }

}
