<?php

namespace App\Validation;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class Validation{

    public static function register($request){

        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ];
    
        $messages = [
            'name.required' => 'Necessário um nome para cadastro.',
            'email.required' => 'Necessário um e-mail para cadastro.',
            'email.unique' => 'E-mail e/ou senha inválidos.',
            'password.required' => 'Necessário uma senha para cadastro.',
            'password.min' => 'Senha precisa ter no mínimo 8 caracteres.'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);

        $users = User::all();

        foreach($users as $user){

            if(Hash::check($request->password, $user->password)){
                $response = 'E-mail e/ou senha inválidos.';

                return $response;
            }

        }

        if($validator->fails()){

            $response['error'] = $validator->messages();
            return $response['error'];
        }
    }

    public static function login($request){

        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
    
        $messages = [
            'email.required' => 'Necessário um e-mail para login.',
            'password.required' => 'Necessário uma senha para login.'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){

            $response['error'] = $validator->messages();
            return $response;
        }

        $user = User::where('email', $request->email)->first();
        
        if(!$user || !Hash::check($request->password, $user->password)){

            $response['error'] = 'E-mail e/ou senha inválidos.';
            return $response;
        }

    }

}