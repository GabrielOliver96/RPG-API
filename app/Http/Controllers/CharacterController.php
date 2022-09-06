<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jwt\Jwt;
use App\Contracts\IJwt;
use App\Repos\CharacterRepos;
use App\Contracts\IRepos;

class CharacterController extends Controller
{

    protected $_jwt;
    protected $_repos;

    public function __construct(IJwt $jwt, IRepos $IRepos){

        $this->_jwt = $jwt;
        $this->_repos = $IRepos;
    }
    
    public function createCharacterInfo(Request $request){
        
        $data = $request->all();   
        
        $createInfoCharacter = $this->_repos->create($data);

        if(!$createInfoCharacter){

            $response['error'] = 'Necessário estar logado.';
        }

        $response['success'] = 'As informações básicas do seu personagem foram adicionadas com sucesso.';

        return $response;
    }

    public function findCharacter(Request $request){

    }
}
