<?php

namespace App\Contracts;

interface IUserRepos {

    public function register($request);
    public function login($request);
}