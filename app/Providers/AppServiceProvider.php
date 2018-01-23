<?php

namespace Davis_Blog\Providers;

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
        view()->composer('layouts.sidebar', function ($view){  //this wil be avaiable whenever we load layouts.sidebar

            $view->with('archives', \Davis_Blog\Post::archives());

            $view->with('tags', \Davis_Blog\Tag::has('posts')->pluck('name'));
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
