<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAttributes extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'forca',
        'destreza',
        'agilidade',
        'carisma',
        'manipulacao',
        'aparencia',
        'percepcao',
        'inteligencia',
        'raciocinio'
    ];
}
