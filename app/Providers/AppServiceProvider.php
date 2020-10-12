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
        //ローカルの時はif消す
        if(env('APP_ENV') === 'production')
        {
            $genres_music = Genre::where('id',1,11,21,31,41,51,61,71,91,12,22,32,42,52)->get();
            $genres_illustration = Genre::where('id',[62,72,82,92,13,23,33,43,53,63,73,83,93,])->get();
            View::share(compact('genres_music','genres_illustration'));
        }
        Schema::defaultStringLength(191);
    }
}
// $genres_music = Genre::where('id',[1,11,21,31,41,51,61,71,91,12,22,32,42,52])->get();
//         $genres_illustration = Genre::where('id',[62,72,82,92,13,23,33,43,53,63,73,83,93,])->get();


        // $genres_music = Genre::where('id','<',15)->get();
        //     $genres_illustration = Genre::where('id','>',14)->get();
        //     View::share(compact('genres_music','genres_illustration'));