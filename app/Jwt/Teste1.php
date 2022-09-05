<?php

namespace App\Jwt;

use App\Contracts\ITeste;

class Teste1 implements ITeste{

    public function add($add){
        $add = 'Add';
        return $add;
    }

}