<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Validation\Validation;
use Illuminate\Support\Facades\Hash;
use App\Jwt\Jwt;

class UserController extends Controller
{
    public function register(Request $request){
        
        $validation = Validation::register($request);

        if($validation != null){

            return $validation;
        }

        $data = User::create([
            'profile_picture' => $request->profile_picture,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $jwt = new Jwt;
        $jwt = $jwt->createJwt($data);

        $response = [
            'success' => 'Cadastro realizado com sucesso.',
            'token' => $jwt
        ];

        return $response;
    }

    public function login(Request $request){

        $validation = Validation::login($request);
        //dd($validation);
        if($validation != null){
            return $validation;
        }

        $data = User::where('email', $request->email)->first();

        $token = new Jwt;
        $token = $token->createJwt($data);
        
        $response = [
            'success' => 'Logado com sucesso.',
            'token' => $token
        ];

        return $response;
    }
}
