<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        ローカルの時はif消す
        if(env('APP_ENV') === 'production')
        {
            $genres_music = Genre::where('id','<',141)->get();
            $genres_illustration = Genre::where('id','>',131)->get();
            View::share(compact('genres_music','genres_illustration'));
        }

        // $genres_music = Genre::where('id','<',15)->get();
        //     $genres_illustration = Genre::where('id','>',14)->get();
        //     View::share(compact('genres_music','genres_illustration'));

        if ($this->app->environment() === 'heroku') {
                \URL::forceScheme('https');
            }
            Schema::defaultStringLength(191);


        Schema::defaultStringLength(191);
    }
}
