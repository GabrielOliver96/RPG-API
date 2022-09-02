<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSkills extends Model
{
    use HasFactory;

    protected $fillable = [
        'prontidao',
        'esporte',
        'briga',
        'armas_brancas',
        'armas_de_fogo',
        'esquiva',
        'empatia',
        'expressao',
        'intimidacao',
        'lideranca',
        'manha',
        'labia',
        'empatia_com_animais',
        'oficios',
        'conducao',
        'etiqueta',
        'performance',
        'seguranca',
        'furtividade',
        'sobrevivencia',
        'academico',
        'computador',
        'investigacao',
        'idioma',
        'medicina',
        'ocultismo',
        'ciencia'
    ];
}
