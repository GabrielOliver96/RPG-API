<?php

namespace App\Contracts;

interface IRepos {

    public function create($data);
    public function find($id);

}