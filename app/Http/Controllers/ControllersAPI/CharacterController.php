<?php

namespace App\Http\Controllers\ControllersAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\IJwt;
use App\Contracts\ICharacterRepos;

class CharacterController extends Controller
{

    private $_repos;

    public function __construct(ICharacterRepos $IRepos){

        $this->_repos = $IRepos;
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
        
        $createCharacter = $this->_repos->store($data);

        if(!$createCharacter){

            $response['error'] = 'Necessário estar logado.';
        }

        $response['success'] = 'As informações básicas do seu personagem foram adicionadas com sucesso.';

        return $response;
    }

    public function findCharacter(Request $request){

    }
}
