<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Genre;

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
        $genres_music = Genre::where('id','<',15)->get();
        $genres_illustration = Genre::where('id','>',14)->get();
        View::share(compact('genres_music','genres_illustration'));
    }
}
