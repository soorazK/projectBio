<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
<<<<<<< HEAD
       Schema::defaultStringLength(191);
=======
        Schema::defaultStringLength(191);
>>>>>>> f4520f31e35c8531a62bf7fc9118ac812b4cc63a
    }
}
