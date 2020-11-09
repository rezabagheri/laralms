<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Page;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer( '*', function( $view ) {

            $pages = page::all();
            return $view->with('pages', $pages);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
