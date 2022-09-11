<?php

namespace App\Repos;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Contracts\ICharacterRepos;
use App\Contracts\IJwt;


class CharacterRepos implements ICharacterRepos{

    protected $_request;
    protected $_model;
    protected $_jwt;
    
    public function __construct(Request $request, Character $model, IJwt $iJwt){

        $this->_request = $request;
        $this->_model = $model;
        $this->_jwt = $iJwt;
    }

    public function findAll(){
        
        $headerToken = explode(' ', $this->_request->header('authorization'));
        $payload = $this->_jwt->validateJwt($headerToken[1]);

        if(!$payload){
            $response = false;
            return $response;
        }

        return $this->_model->all();
    }

    public function store($data){

        $headerToken = explode(' ', $this->_request->header('authorization')); 

        $payload = $this->_jwt->validateJwt($headerToken[1]);

        if(!$payload){

            $response = false; //necessário estar logado.
            return $response;
        }
        
        $character = $this->_model->create([
            'user_id' => $payload->id,
            'nome' => $data['nome'],
            'jogador' => $data['jogador'],
            'ocupacao' => $data['ocupacao'],
            'idade' => $data['idade'],
            'sexo' => $data['sexo'],
            'peso' => $data['peso'],
            'altura' => $data['altura'],
            'descricao_do_personagem' => $data['descricao_do_personagem'],

            'forca' => $data['forca'],
            'destreza' => $data['destreza'],
            'agilidade' => $data['agilidade'],
            'carisma' => $data['carisma'],
            'manipulacao' => $data['manipulacao'],
            'aparencia' => $data['aparencia'],
            'percepcao' => $data['percepcao'],
            'inteligencia' => $data['inteligencia'],
            'raciocinio' => $data['raciocinio'],

            'prontidao' => $data['prontidao'],
            'esporte' => $data['esporte'],
            'briga' => $data['briga'],
            'armas_brancas' => $data['armas_brancas'],
            'armas_de_fogo' => $data['armas_de_fogo'],
            'esquiva' => $data['esquiva'],
            'empatia' => $data['empatia'],
            'expressao' => $data['expressao'],
            'intimidacao' => $data['intimidacao'],
            'lideranca' => $data['lideranca'],
            'manha' => $data['manha'],
            'labia' => $data['labia'],
            'empatia_com_animais' => $data['empatia_com_animais'],
            'oficios' => $data['oficios'],
            'conducao' => $data['conducao'],
            'etiqueta' => $data['etiqueta'],
            'performance' => $data['performance'],
            'seguranca' => $data['seguranca'],
            'furtividade' => $data['furtividade'],
            'sobrevivencia' => $data['sobrevivencia'],
            'academico' => $data['academico'],
            'computador' => $data['computador'],
            'investigacao' => $data['investigacao'],
            'idioma' => $data['idioma'],
            'medicina' => $data['medicina'],
            'ocultismo' => $data['ocultismo'],
            'ciencia' => $data['ciencia'],

            'vigor' => $data['vigor'],
            'consciencia' => $data['consciencia'],
            'autocontrole' => $data['autocontrole'],
            'coragem' => $data['coragem'],
            'humanidade' => $data['consciencia'] + $data['autocontrole'],
            'pontos_de_vida' => $data['vigor'] * 5,
            'sanidade' => $data['consciencia'] * 3

            /*
            Humanidade = Consciência + Autocontrole
            Pontos de vida = Vigor * 5
            Sanidade = Consciência * 3
            */
        ]);

        return $character;
    }

    public function find($id){

    }

    public function update($data){

    }

}