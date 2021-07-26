<?php

namespace App\Providers;

use App\Models\ProductType;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        //
        Paginator::useBootstrap();
        view()->composer('header',function ($view){
           $productType=ProductType::all();
           $view->with('productType',$productType);
        });
    }
}
