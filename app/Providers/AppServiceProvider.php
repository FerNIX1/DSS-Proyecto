<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;
use App\Models\Navbar;

// =================================================
use Illuminate\Support\Facades\Schema;
// =================================================


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();

        View::composer('*', function($view){
            $navbars = Navbar::orderBy('ordering')->get();
            $view->with('navbars', $navbars);
        });
    }
}
