<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'conhecimento_academico',
        'pontos'
    ];
}
