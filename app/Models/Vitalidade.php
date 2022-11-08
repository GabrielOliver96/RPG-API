<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitalidade extends Model
{
    protected $fillable = [
        'character_id',
        'escoriado',
        'machucado',
        'ferido',
        'ferido_gravemente',
        'espancado',
        'aleijado',
        'incapacitado',
        'morte_final'
    ];
}
