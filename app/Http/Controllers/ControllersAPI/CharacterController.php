<?php

namespace App\Http\Controllers\ControllersAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\ICharacterRepos;
use App\Contracts\IJwt;

class CharacterController extends Controller
{

    protected $_repos;
    protected $_jwt;

    public function __construct(ICharacterRepos $IRepos, IJwt $iJwt){

        $this->_repos = $IRepos;
        $this->_jwt = $iJwt;
    }

    public function findAllCharacters(){

        $findAllCharacters = $this->_repos->findAll();
        
        if(!$findAllCharacters){
            $response = 'Necessário estar logado.';
            return $response;
        } 
    }
    
    public function createCharacter(Request $request){
        
        $data = $request->all();   

        $headerToken = explode(' ', $request->header('authorization')); 

        $payload = $this->_jwt->validateJwt($headerToken[1]);

        if(!$payload){

            $response = false; //necessário estar logado.
            return $response;
        }
        
        $createCharacter = $this->_repos->store($payload, $data);

        if(!$createCharacter){

            $response['error'] = 'Necessário estar logado.';
        }

        $response['success'] = 'As informações básicas do seu personagem foram adicionadas com sucesso.';

        return $response;
    }

    public function findCharacter(Request $request){

    }
}
