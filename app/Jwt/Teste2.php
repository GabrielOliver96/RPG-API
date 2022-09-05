<?php

namespace App\Jwt;

use App\Contracts\ITeste;

class Teste2 implements ITeste{
    
    public function add($adicionar){
        $adicionar = 'Adicionar.';
        return $adicionar;
    }  

}