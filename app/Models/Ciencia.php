<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'conhecimento_cientifico',
        'pontos'
    ];
}
