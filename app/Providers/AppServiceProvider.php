<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\setting;
use App\Model\category;
use App\Model\service;

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
        view()->share([
            'services' => service::all(),
            'categorys' => category::all(),
            'setting'=>setting::where('status',1)->limit(1)->first()
        ]); 
    }
}
