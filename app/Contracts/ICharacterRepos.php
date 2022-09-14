<?php

namespace App\Contracts;

interface ICharacterRepos {

    public function findAll();
    public function store($id, $data);
    public function find($id);
    public function update($data);
    
}