<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    
    public function createCharacter(Request $request){

        dd($request->all());

    }

}
