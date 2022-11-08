<?php

namespace App\Contracts;

interface IVitalityRepos{

    public function store($characterId, $data);

}