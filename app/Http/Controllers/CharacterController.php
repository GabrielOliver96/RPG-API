<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\IJwt;
use App\Contracts\ICharacterRepos;
use App\Contracts\IDisciplineRepos;
use App\Contracts\IVitalityRepos;
use Illuminate\Support\Facades\Storage;

use App\Models\CharacterImage;

class CharacterController extends Controller
{

    protected $_characterRepos;
    protected $_disciplineRepos;
    protected $_vitalityRepos;

    public function __construct(ICharacterRepos $ICharacterRepos, IDisciplineRepos $IDisciplineRepos, IVitalityRepos $IVitalityRepos){

        //$this->middleware('auth');
        $this->_characterRepos = $ICharacterRepos;
        $this->_disciplineRepos = $IDisciplineRepos;
        $this->_vitalityRepos = $IVitalityRepos;

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
        $createVitality = $this->_vitalityRepos->store($createCharacter['id'], $data);

        return redirect()->route('allCharacters');
    }


    public function deleteCharacter($id){
        
        $deleteCharacter = $this->_characterRepos->deleteCharacter($id);

        return redirect()->route('allCharacters');

    }

    public function editCharacterView($id){

        $character = $this->_characterRepos->findCharacter($id);
        $characterDisciplines = $this->_disciplineRepos->findDisciplinesByCharacterId($id);
        
        return view('character.edit', ['character' => $character, 'characterDisciplines' => $characterDisciplines]);

    }


    public function editCharacter($id){
        
        $character = $this->_characterRepos->updateCharacter($id);
        //$characterDisciplines = $this->_disciplineRepos->updateDisciplines($id);
        
        return redirect()->route('allCharacters');

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
