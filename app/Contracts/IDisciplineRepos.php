<?php

namespace App\Contracts;

interface IDisciplineRepos{

    public function store($characterId, $data);
    public function findDisciplinesByCharacterId($id);

}