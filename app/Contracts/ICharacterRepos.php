<?php

namespace App\Contracts;

interface ICharacterRepos {

    public function findAll($id);
    public function store($id, $data);
    public function deleteCharacter($id);
    public function findCharacter($id);
    public function updateCharacter($id);
    
}