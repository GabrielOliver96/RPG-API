<?php

namespace App\Http\Controllers\ControllersAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\ICharacterRepos;
use App\Contracts\IJwt;

class CharacterController extends Controller
{

    protected $_request;
    protected $_repos;
    protected $_jwt;

    public function __construct(Request $request, ICharacterRepos $IRepos, IJwt $iJwt){

        $this->_request = $request;
        $this->_repos = $IRepos;    
        $this->_jwt = $iJwt;
    }

    public function findAllCharacters(){

        $headerToken = explode(' ', $this->_request->header('authorization'));
        $payload = $this->_jwt->validateJwt($headerToken[1]);

        if(!$payload){
            $response['error'] = 'Necessário estar logado.';
            return $response;
        }

        $allCharacters = $this->_repos->findAll($payload->id);
        
        if(empty($allCharacters)){
            $response['error'] = 'Nenhum personagem cadastrado.';
            return $response;
        } 

        return $allCharacters;
    }
    
    public function createCharacter(){
        
        $data = $_request->all();   

        $headerToken = explode(' ', $this->_request->header('authorization')); 

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

    public function deleteCharacter($id){

        $deleteCharacter = $this->_repos->delete($id);

        //dd($deleteCharacter);

        $response['error'] = 'Personagem excluído com sucesso.';

        return $respose;

    }

    public function findCharacter(){

    }
}
