<?php

namespace App\Repos;

use Illuminate\Http\Request;
use App\Contracts\IVitalityRepos;
use App\Models\Vitalidade;

class VitalityRepos implements IVitalityRepos{

    protected $_request;
    protected $_vitality;

    public function __construct(Request $request, Vitalidade $vitality){

        $this->_request = $request;
        $this->_vitality = $vitality;

    }

    public function store($characterId, $data){

        $vitality = $this->_vitality->create([
            "character_id" => $characterId,
            "escoriado" => $data['escoriado'],
            "machucado" => $data['machucado'],
            "ferido" => $data['ferido'],
            "ferido_gravemente" => $data['ferido_gravemente'],
            "espancado" => $data['espancado'],
            "aleijado" => $data['aleijado'],
            "incapacitado" => $data['incapacitado'],
            "morte_final" => $data['morte_final']
        ]);

        return $vitality;

    }

}