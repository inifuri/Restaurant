<?php

namespace rest\Providers;

use Illuminate\Support\ServiceProvider;
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
      Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	     if ($this->app->environment() == 'local') {
		       $this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
	   }
}
}
