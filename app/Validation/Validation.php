<?php

namespace App\Validation;

use Illuminate\Support\Facades\Validator;

class Validation{

    public static function register($request, $data){

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ];
    
        $messages = [
            'name.required' => 'Necessário um nome para cadastro.',
            'email.required' => 'E-mail e/ou senha incorretos.',
            'password.required' => 'E-mail e/ou senha incorretos.',
            'password.min' => 'Senha precisa ter no mínimo 8 caracteres.'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){

            $response['error'] = $validator->messages();
            return $response['error'];
        }
    }

}