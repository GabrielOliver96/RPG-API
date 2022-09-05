<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CharacterInformations;
use App\Validation\Validation;
use App\Jwt\Jwt;
use App\Contracts\IJwt;
/*
use App\Contracts\ITeste;
use App\Jwt\Teste1;
use App\Jwt\Teste2;
*/
class CharacterController extends Controller
{

    private $_jwt;

    public function __construct(IJwt $jwt){

        $this->_jwt = $jwt;
    }
    
    public function createCharacter(Request $request){
        
        $data = $request->all();   
        
        $headerToken = explode(' ', $request->header('authorization'));

        $payload = $this->_jwt->validateJwt($headerToken[1]);

        if(!$payload){

            $response['error'] = 'Necessário estar logado.';
            return $response;
        }

        $createCharacter = CharacterInformations::create([
            'user_id' => $payload->id,
            'nome' => $request->nome,
            'jogador' => $request->jogador,
            'ocupacao' => $request->ocupacao,
            'idade' => $request->idade,
            'sexo' => $request->sexo,
            'peso' => $request->peso,
            'altura' => $request->altura,
            'descricao_do_personagem' => $request->descricao_do_personagem
        ]);
        
        $response['success'] = 'As informações básicas do seu personagem foram adicionadas com sucesso.';

        return $response;

    }

}
