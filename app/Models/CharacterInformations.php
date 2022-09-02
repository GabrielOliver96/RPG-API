<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterInformations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'jogador',
        'ocupacao',
        'idade',
        'sexo',
        'peso',
        'altura',
        'descricao_do_personagem'
    ];
}
