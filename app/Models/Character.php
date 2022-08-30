<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
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
        'pontos_de_vida',
        'sanidade',
        'forca',
        'destreza',
        'agilidade',
        'carisma',
        'manipulacao',
        'aparencia',
        'percepcao',
        'inteligencia',
        'raciocinio',
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
        'ciencia',
        'consciencia',
        'autocontrole',
        'coragem',
        'humanidade',
        'descricao_do_personagem',
    ];
}
