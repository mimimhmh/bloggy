<?php

namespace App\Providers;

use App\Post;
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
        view()->composer('layouts.sidebar', function ($view){

            $view->with('populars', Post::popular());
        });

        view()->composer('layouts.sidebar', function ($view){

            $view->with('latest_posts',
                Post::latest()->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get());
        });

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
