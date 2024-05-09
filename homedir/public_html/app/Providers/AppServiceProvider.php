<?php

namespace App\Providers;

use App\setting;
use App\category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\order;
use App\service;
use App\work;
use App\slider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
    */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */  
    public function boot()
    {
        View::composer('admin.include.master', function ($view) {
            $view->with('appsetting'  , setting::first());
        });

        View::composer('front.include.master', function ($view) {
            $view->with('appsetting'  , setting::first());
            $view->with('services'    , service::where('parent',0)->get());
            $view->with('works'       , work::where('parent',0)->get());
            $view->with('sliders'     , slider::where('suspensed',0)->where('type',0)->get());
        });
    }
}
