<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterVirtues extends Model
{
    use HasFactory;

    protected $fillable = [
        'vigor',
        'consciencia',
        'autocontrole',
        'coragem',
        'humanidade',
        'pontos_de_vida',
        'sanidade'
    ];
}
