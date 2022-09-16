<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\IJwt;
use App\Contracts\ICharacterRepos;

class CharacterController extends Controller
{

    protected $_repos;

    public function __construct(ICharacterRepos $IRepos){

        //$this->middleware('auth');
        $this->_repos = $IRepos;
    }

    public function findAllCharacters(){

        $userId = auth()->user()->id;

        $allCharacters = $this->_repos->findAll($userId);

        return view('character.all', compact('allCharacters'));

    }
    
    public function createCharacter(Request $request){
        
        $data = $request->all();   
        
        $createCharacter = $this->_repos->store(auth()->user(), $data);

        return redirect()->route('home');
    }

    public function findCharacter(Request $request){

    }
}
