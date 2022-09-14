<?php

namespace App\Repos;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Contracts\IJwt;
use App\Contracts\IUserRepos;

class UserRepos implements IUserRepos {

    protected $_request;
    protected $_model;
    protected $_jwt;

    public function __construct(Request $request, User $model, IJwt $jwt) {
        
        $this->_request = $request;
        $this->_model = $model;
        $this->_jwt = $jwt;

    }

    public function register($request) {

        $data = $this->_model->create([
            'profile_picture' => $request->profile_picture,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return $data;
    }

    
    

}