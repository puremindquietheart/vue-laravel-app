<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// add schema
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }
    public function boot()
    {
        // declare default string length
        Schema::defaultStringLength(191);
    }
}
