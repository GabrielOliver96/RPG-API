<?php

namespace App\Repos;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Antecedente;
use App\Contracts\ICharacterRepos;
use App\Contracts\IJwt;


class CharacterRepos implements ICharacterRepos{

    protected $_request;
    protected $_model;
    protected $_jwt;
    
    public function __construct(Request $request, Character $model, IJwt $iJwt){

        $this->_request = $request;
        $this->_model = $model;
        $this->_jwt = $iJwt;
    }

    public function findAll($userId){
       
        $allCharactersUser = $this->_model->where('user_id', $userId)->get()->all();
        
        return $allCharactersUser;
    }

    public function store($user, $data){
        
        $character = $this->_model->create([
            'user_id' => $user->id, //controller manda através da variavel payload
            'nome' => $data['nome'],
            'jogador' => $user->name,
            'cronica' => $data['cronica'],
            'natureza' => $data['natureza'],
            'comportamento' => $data['comportamento'],
            'cla' => $data['cla'],
            'geracao' => $data['geracao'],
            'descricao_do_personagem' => $data['descricao_do_personagem'],
            'character_image' => $data['character_image'],

            'forca' => $data['forca'],
            'destreza' => $data['destreza'],
            'vigor' => $data['vigor'],
            'carisma' => $data['carisma'],
            'manipulacao' => $data['manipulacao'],
            'aparencia' => $data['aparencia'],
            'percepcao' => $data['percepcao'],
            'inteligencia' => $data['inteligencia'],
            'raciocinio' => $data['raciocinio'],

            'prontidao' => $data['prontidao'],
            'esporte' => $data['esporte'],
            'briga' => $data['briga'],
            'esquiva' => $data['esquiva'], 
            'empatia' => $data['empatia'],
            'expressao' => $data['expressao'],
            'intimidacao' => $data['intimidacao'],
            'lideranca' => $data['lideranca'],
            'manha' => $data['manha'],
            'labia' => $data['labia'],

            'empatia_com_animais' => $data['empatia_com_animais'],
            'oficios' => $data['oficios'],
            'conducao' => $data['conducao'],
            'etiqueta' => $data['etiqueta'],
            'armas_de_fogo' => $data['armas_de_fogo'],
            'armas_brancas' => $data['armas_brancas'],
            'performance' => $data['performance'],
            'seguranca' => $data['seguranca'],
            'furtividade' => $data['furtividade'],
            'sobrevivencia' => $data['sobrevivencia'],

            'academicos' => $data['academicos'],
            'computador' => $data['computador'],
            'financas' => $data['financas'],
            'investigacao' => $data['investigacao'],
            'direito' => $data['direito'],
            'linguistica' => $data['linguistica'],
            'medicina' => $data['medicina'],
            'ocultismo' => $data['ocultismo'],
            'politica' => $data['politica'],
            'ciencia' => $data['ciencia'],

            'consciencia_conviccao' => $data['consciencia_conviccao'], 
            'autocontrole_instintos' => $data['autocontrole_instintos'], 
            'coragem' => $data['coragem'],
                
            'humanidade' => $data['consciencia_conviccao'] + $data['autocontrole_instintos'], 
            'forca_de_vontade' => $data['coragem'],
            'pontos_de_sangue' => $data['pontos_de_sangue'], //adicionar função que calcula de acordo geração escolhida

            'vitalidade' => 0,
            'experiencia' => 0,
        ]);

        /*
        foreach(array_combine($data['antecedente'], $data['pontos']) as $antecedente => $pontos){
            $antecedentes[] = [
                'character_id' => $character->id,
                'antecedente' => $antecedente,
                'pontos' => $pontos,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]; 
        }
        
        $insertAntedecentes = Antecedente::insert($antecedentes);
        */
        return $character;
    }

    public function deleteCharacter($id){

        $delete = $this->_model->where('id', $id)->delete();

        return $delete;
    }

    public function findCharacter($id){

        $character = $this->_model->find($id);
        
        return $character;

    }

    public function updateCharacter($id){

        $data = $this->_request->all();
        //dd($id);
        $update = $this->_model->where('id', $id)->update([
            'cronica' => $data['cronica'],
            'geracao' => $data['geracao'],
            'character_image' => $data['character_image'],

            'forca' => $data['forca'],
            'destreza' => $data['destreza'],
            'vigor' => $data['vigor'],
            'carisma' => $data['carisma'],
            'manipulacao' => $data['manipulacao'],
            'aparencia' => $data['aparencia'],
            'percepcao' => $data['percepcao'],
            'inteligencia' => $data['inteligencia'],
            'raciocinio' => $data['raciocinio'],

            'prontidao' => $data['prontidao'],
            'esporte' => $data['esporte'],
            'briga' => $data['briga'],
            'esquiva' => $data['esquiva'], 
            'empatia' => $data['empatia'],
            'expressao' => $data['expressao'],
            'intimidacao' => $data['intimidacao'],
            'lideranca' => $data['lideranca'],
            'manha' => $data['manha'],
            'labia' => $data['labia'],

            'empatia_com_animais' => $data['empatia_com_animais'],
            'oficios' => $data['oficios'],
            'conducao' => $data['conducao'],
            'etiqueta' => $data['etiqueta'],
            'armas_de_fogo' => $data['armas_de_fogo'],
            'armas_brancas' => $data['armas_brancas'],
            'performance' => $data['performance'],
            'seguranca' => $data['seguranca'],
            'furtividade' => $data['furtividade'],
            'sobrevivencia' => $data['sobrevivencia'],

            'academicos' => $data['academicos'],
            'computador' => $data['computador'],
            'financas' => $data['financas'],
            'investigacao' => $data['investigacao'],
            'direito' => $data['direito'],
            'linguistica' => $data['linguistica'],
            'medicina' => $data['medicina'],
            'ocultismo' => $data['ocultismo'],
            'politica' => $data['politica'],
            'ciencia' => $data['ciencia'],

            'consciencia_conviccao' => $data['consciencia_conviccao'], 
            'autocontrole_instintos' => $data['autocontrole_instintos'], 
            'coragem' => $data['coragem'],
                
            'humanidade' => $data['consciencia_conviccao'] + $data['autocontrole_instintos'], 
            'forca_de_vontade' => $data['coragem'],
            'pontos_de_sangue' => $data['pontos_de_sangue'], //adicionar função que calcula de acordo geração escolhida

            'vitalidade' => 0,
            'experiencia' => 0,
        ]);

        return $update;
    }

}