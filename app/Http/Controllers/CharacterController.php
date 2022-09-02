<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CharacterInformations;
use App\Validation\Validation;

class CharacterController extends Controller
{
    
    public function createCharacterInformations(Request $request){

        return 'Success';

    }

}
