<?php

namespace App\Repos;

use Illuminate\Http\Request;
use App\Contracts\IRepos;
use App\Models\CharacterInformations;
use App\Contracts\IJwt;


class CharacterRepos implements IRepos{

    protected $_model;
    protected $_jwt;
    protected $_request;

    public function __construct(Request $request, CharacterInformations $model, IJwt $IJwt){

        $this->_request = $request;
        $this->_model = $model;
        $this->_jwt = $IJwt;
    }

    public function create($data){

        $headerToken = explode(' ', $this->_request->header('authorization')); 

        $payload = $this->_jwt->validateJwt($headerToken[1]);

        if(!$payload){
            $response = false; //necessário estar logado.
            return $response;
        }
        
        $this->_model->create([
            'user_id' => $payload->id,
            'nome' => $data['nome'],
            'jogador' => $data['jogador'],
            'ocupacao' => $data['ocupacao'],
            'idade' => $data['idade'],
            'sexo' => $data['sexo'],
            'peso' => $data['peso'],
            'altura' => $data['altura'],
            'descricao_do_personagem' => $data['descricao_do_personagem']
        ]);

        $response = true;

        return $response;

    }

    public function find($id){

    }

}