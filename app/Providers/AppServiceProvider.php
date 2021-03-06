<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
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

        /*
        so we simply say we want to load view sidebar and also we want to
        bind value to it which is archive
        also pass Tags for show on sidebar
        */
        view()->composer('layouts.sidebar',function ($view){
            $archives = Post::archives();
            //we declare if we have posts show its name
            $tags   = Tag::has('posts')->pluck('name');
            $view->with(compact('archives','tags'));

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
