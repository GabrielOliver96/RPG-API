<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\IJwt;
use App\Contracts\ICharacterRepos;
use App\Contracts\IDisciplineRepos;
use Illuminate\Support\Facades\Storage;

use App\Models\CharacterImage;

class CharacterController extends Controller
{

    protected $_repos;

    public function __construct(ICharacterRepos $ICharacterRepos, IDisciplineRepos $IDisciplineRepos){

        //$this->middleware('auth');
        $this->_characterRepos = $ICharacterRepos;
        $this->_disciplineRepos = $IDisciplineRepos;
    }

    public function findAllCharacters(){

        $userId = auth()->user()->id;

        $allCharacters = $this->_characterRepos->findAll($userId);
        
        return view('character.all', compact('allCharacters'));

    }
    
    public function createCharacterView(){

        $allImagesMasculine = CharacterImage::where('gender', 'masculino')->get();
        $allImagesFeminine = CharacterImage::where('gender', 'feminino')->get();
        
        return view('character.create', compact('allImagesMasculine', 'allImagesFeminine'));

    }

    public function createCharacter(Request $request){
        
        $data = $request->all();   
        
        $createCharacter = $this->_characterRepos->store(auth()->user(), $data);

        $createDiscipline = $this->_disciplineRepos->store($createCharacter['id'], $data);

        dd($createDiscipline);

        return redirect()->route('allCharacters');
    }

    public function deleteCharacter($id){
        
        $deleteCharacter = $this->_characterRepos->delete($id);

        return redirect()->route('allCharacters');

    }

    public function findCharacter(Request $request){

    }




    public function addImg(Request $request){
        
        $file = $request->character_image;
        $extension = $file->extension();

        /*if($extension == 'png'){
            
        }*/

        $path = $request->file('character_image')->storeAs('tokens', 'a.png', 'img');
        
        return view('character.all');
    }

    
}
