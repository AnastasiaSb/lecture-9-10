<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'categories', 'App\Http\ViewComposers\CategoryComposer'
        );
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    	//
    }
}