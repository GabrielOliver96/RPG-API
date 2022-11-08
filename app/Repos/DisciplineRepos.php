<?php

namespace App\Repos;

use Illuminate\Http\Request;
use App\Contracts\IDisciplineRepos;
use App\Contracts\IJwt;
use App\Models\Disciplina;

class DisciplineRepos implements IDisciplineRepos {

    protected $_request;
    protected $_model;

    public function __construct(Request $request, Disciplina $model){

        $this->_request = $request;
        $this->_model = $model;

    }

    public function store($characterId, $data){
        
        //corrigir para fazer inserção de dados de uma só vez.
        //colocar tudo dentro de um array e aplicar o insert a ele.
        for($i=0; $i<count($data['disciplinas']); $i++){
            
            $disciplines = $this->_model->create([
                'character_id' => $characterId,
                'disciplina' => $data['disciplinas'][$i],
                'pontos' => $data['pontos'][$i]
            ]);

        }

        return $disciplines;
    }

    public function findDisciplinesByCharacterId($id){

        $disciplines = $this->_model->where('character_id', $id)->get();

        return $disciplines;
    }

}