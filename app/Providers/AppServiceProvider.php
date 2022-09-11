<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('App\Contracts\IJwt', 'App\Jwt\Jwt');
        App::bind('App\Contracts\ICharacterRepos', 'App\Repos\CharacterRepos');
        App::bind('App\Contracts\IUserRepos', 'App\Repos\UserRepos');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
