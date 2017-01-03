<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.qadoorheader', 'App\Http\ViewComposers\TagComposer@compose');
        view()->composer('layouts.qadoorheader', 'App\Http\ViewComposers\CatComposer@compose');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
