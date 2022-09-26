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
        'cronica',
        'natureza',
        'comportamento',
        'cla',
        'geracao',
        'descricao_do_personagem',
        'character_image',

        'forca',
        'destreza',
        'vigor',
        'carisma',
        'manipulacao',
        'aparencia',
        'percepcao',
        'inteligencia',
        'raciocinio',

        'prontidao',
        'esporte',
        'briga',
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
        'armas_de_fogo',
        'armas_brancas',
        'performance',
        'seguranca',
        'furtividade',
        'sobrevivencia',

        'academicos',
        'computador',
        'financas',
        'investigacao',
        'direito',
        'linguistica',
        'medicina',
        'ocultismo',
        'politica',
        'ciencia',

        'consciencia/conviccao', 
        'autocontrole/instintos', 
        'coragem',
            
        'humanidade', 
        'forca_de_vontade',
        'pontos_de_sangue',

        'vitalidade',
        'experiencia'
    ];

}
