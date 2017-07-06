<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

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


        View::composer('*', function ($view) {
            $navbar = array(
                array(
                    'text' => 'Home',
                    'link' => '/'
                ),
                array(
                    'text' => 'About',
                    'link' => '/about'
                ),
                array(
                    'text' => 'Tutorials',
                    'link' => '/tutorials'
                )
            );

            $view->with('navbar', $navbar);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }
}
