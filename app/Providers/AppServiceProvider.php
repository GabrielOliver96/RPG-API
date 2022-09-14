<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        App::bind('App\Contracts\IJwt', 'App\Jwt\Jwt');
        App::bind('App\Contracts\ICharacterRepos', 'App\Repos\CharacterRepos');
        App::bind('App\Contracts\IUserRepos', 'App\Repos\UserRepos');
    }

    public function boot()
    {
        //
    }
}
