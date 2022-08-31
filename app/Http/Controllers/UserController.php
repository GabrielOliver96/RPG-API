<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Validation\Validation;
use Illuminate\Support\Facades\Hash;
use App\JwtAuth\JwtAuth;

class UserController extends Controller
{
    public function register(Request $request){

        $data = $request->all();

        $validation = Validation::register($request, $data);

        if($validation != null){

            return $validation;
        }

        $data = User::create([
            'profile_picture' => $request->profile_picture,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $jwt = new JwtAuth;
        $jwt = $jwt->createJwt($data);

        $response = [
            'success' => 'Cadastro realizado com sucesso.',
            'token' => $jwt
        ];

        return $response;
    }
}
