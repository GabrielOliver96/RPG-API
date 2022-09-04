<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CharacterInformations;
use App\Validation\Validation;
use App\Jwt\Jwt;

class CharacterController extends Controller
{
    
    public function createCharacterInformations(Request $request){

        $data = $request->all();   
        
        $headerToken = explode(' ', $request->header('authorization'));

        $jwt = new Jwt;
        $jwt = $jwt->validateJwt($headerToken[1]);

        if(!$jwt){

            $response['error'] = 'Necessário estar logado.';
            return $response;
        }
        
        $createCharacter = CharacterInformations::create([
            'user_id' => $jwt->id,
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
