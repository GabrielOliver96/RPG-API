<?php

namespace App\Http\Controllers\ControllersAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserValidate;
use App\Contracts\IUserRepos;
use App\Contracts\IJwt;

class UserController extends Controller
{      
    
    protected $_repos;
    protected $_jwt;
    
    public function __construct(IUserRepos $repos, IJwt $jwt) {

        $this->_repos = $repos;
        $this->_jwt = $jwt;
    }
    
    public function register(Request $request) {
        
        $validation = UserValidate::register($request);
        //Se não retornar nenhum erro.
        if($validation != null){

            $response['error'] = $validation;
            return $response['error'];
        }

        $register = $this->_repos->register($request);

        if(!$register){

            $response['error'] = 'Informações para cadastro inválidas.';
        }

        $token = $this->_jwt->createJwt($register);

        $response = [
            'success' => 'Cadastro realizado com sucesso.',
            'token' => $token
        ];

        return $response;
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
