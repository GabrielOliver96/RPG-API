<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserValidate;
use App\Contracts\IUserRepos;

class UserController extends Controller
{      
    
    protected $_repos;
    
    public function __construct(IUserRepos $repos) {

        $this->_repos = $repos;
    }
    
    public function register(Request $request) {
        
        $validation = UserValidate::register($request);

        //dd($validation);
        //Se não retornar nenhum erro.
        /*
        if($validation != null){

            return redirect()->route('register');
        }*/

        $register = $this->_repos->register($request);

        return view('welcome');
    }

    public function login(Request $request) {

        $validation = UserValidate::login($request);
        //Se não retornar nenhum erro.
        if($validation != null){ 

            return $validation;
        }

        $login = $this->_repos->login($request);
        
        if(!$login){

            $response['error'] = 'Não foi possível realizar o login.';
        }

        $token = $this->_jwt->createJwt($login);

        $response = [
            'success' => 'Login realizado com sucesso.',
            'token' => $token
        ];

        return $response;
    }

}
