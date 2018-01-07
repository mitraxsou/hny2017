<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//added the line
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // adding this line to get rid of the error -> SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was t
        //oo long; max key length is 767 bytes


         Schema::defaultStringLength(191);
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
