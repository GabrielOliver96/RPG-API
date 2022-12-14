@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mt-5" id="show" style="">
        <div class="card col-lg-12 p-3 bg-dark text-white border">
            <div class="d-flex justify-content-center">
                <img src="{{url('img/geral/vam_logo1.png')}}" height="300">
            </div>

            <p class="d-flex justify-content-center">Crie o seu personagem</p>

            <form method="POST" autocomplete="off">
                @csrf

                <div class="row">
                    <div class="form-group mt-1 col-lg-4">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control bg-dark text-white" placeholder="{{$character->nome}}" readonly>
                    </div>

                    <div class="form-group mt-1 col-lg-2">
                        <label>Clã</label>
                        <input type="text" name="cla" class="form-control bg-dark text-white" placeholder="{{$character->cla}}" readonly>
                    </div>

                    <div class="form-group mt-1 col-lg-2">
                        <label>Geração</label>
                        <select id="geracao" onclick="bloodPointsCalculation()" name="geracao" class="form-control bg-dark text-white">
                            <option>{{$character->geracao}}ª - Geração Atual</option>
                            <option value="14">14ª</option>
                            <option value="13">13ª</option>
                            <option value="12">12ª</option>
                            <option value="11">11ª</option>
                            <option value="10">10ª</option>
                        </select>
                        <input id="inputBloodPoints" value="" type="hidden" name="pontos_de_sangue">
                    </div>

                    <div class="form-group mt-1 col-lg-4">
                    <label>Crônica</label>
                        <input type="text" name="cronica" class="form-control bg-dark text-white" placeholder="Crônica" value="{{$character->cronica}}">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="form-group mt-2 col-lg-6">
                        <label>Natureza</label>
                        <input type="text" name="natureza" class="form-control bg-dark text-white" placeholder="{{$character->natureza}}" readonly>
                    </div>

                    <div class="form-group mt-2 col-lg-6">
                        <label>Comportamento</label>
                        <input type="text" name="comportamento" class="form-control bg-dark text-white" placeholder="{{$character->comportamento}}" readonly>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label>Descreva o seu personagem</label>
                    <textarea name="descricao_do_personagem" class="form-control bg-dark text-white" placeholder="{{$character->descricao_do_personagem}}" readonly></textarea>
                </div>

                <hr class="mt-4">

                <div class="row">

                    <div class="col">
                        <div class="form-group mt-1 col-lg-12">
                            <label>Força</label>
                            <input type="text" name="forca" class="form-control bg-dark text-white" placeholder="Força" value="{{$character->forca}}">
                        </div>
                        <div class="form-group mt-1 col-lg-12">
                            <label>Destreza</label>
                            <input type="text" name="destreza" class="form-control bg-dark text-white" placeholder="Destreza" value="{{$character->destreza}}">
                        </div>
                        <div class="form-group mt-1 col-lg-12">
                            <label>Vigor</label>
                            <input type="text" name="vigor" class="form-control bg-dark text-white" placeholder="Vigor" value="{{$character->vigor}}">
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-group mt-1 col-lg-12">
                            <label>Carísma</label>
                            <input type="text" name="carisma" class="form-control bg-dark text-white" placeholder="Carísma" value="{{$character->carisma}}">
                        </div>
                        <div class="form-group mt-1 col-lg-12">
                            <label>Manipulação</label>
                            <input type="text" name="manipulacao" class="form-control bg-dark text-white" placeholder="Manipulação" value="{{$character->manipulacao}}">
                        </div>
                        <div class="form-group mt-1 col-lg-12">
                            <label>Aparência</label>
                            <input type="text" name="aparencia" class="form-control bg-dark text-white" placeholder="Aparência" value="{{$character->aparencia}}">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group mt-1 col-lg-12">
                            <label>Percepção</label>
                            <input type="text" name="percepcao" class="form-control bg-dark text-white" placeholder="Percepção" value="{{$character->percepcao}}">
                        </div>
                        <div class="form-group mt-1 col-lg-12">
                            <label>Inteligência</label>
                            <input type="text" name="inteligencia" class="form-control bg-dark text-white" placeholder="Inteligência" value="{{$character->inteligencia}}">
                        </div>
                        <div class="form-group mt-1 col-lg-12">
                            <label>Raciocínio</label>
                            <input type="text" name="raciocinio" class="form-control bg-dark text-white" placeholder="Raciocínio" value="{{$character->raciocinio}}">
                        </div>
                    </div>

                </div>

                <hr class="mt-4">

                <div class="row">

                    <div class="col">

                        <div class="form-group mt-1">
                            <label>Prontidão</label>
                            <input type="text" name="prontidao" class="form-control bg-dark text-white" placeholder="Prontidão" value="{{$character->prontidao}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Esporte</label>
                            <input type="text" name="esporte" class="form-control bg-dark text-white" placeholder="Esporte" value="{{$character->esporte}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Briga</label>
                            <input type="text" name="briga" class="form-control bg-dark text-white" placeholder="Briga" value="{{$character->briga}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Esquiva</label>
                            <input type="text" name="esquiva" class="form-control bg-dark text-white" placeholder="Esquiva" value="{{$character->esquiva}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Empatia</label>
                            <input type="text" name="empatia" class="form-control bg-dark text-white" placeholder="Empatia" value="{{$character->empatia}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Expressão</label>
                            <input type="text" name="expressao" class="form-control bg-dark text-white" placeholder="Expressão" value="{{$character->expressao}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Intimidação</label>
                            <input type="text" name="intimidacao" class="form-control bg-dark text-white" placeholder="Intimidação" value="{{$character->intimidacao}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Liderança</label>
                            <input type="text" name="lideranca" class="form-control bg-dark text-white" placeholder="Liderança" value="{{$character->lideranca}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Manha</label>
                            <input type="text" name="manha" class="form-control bg-dark text-white" placeholder="Manha" value="{{$character->manha}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Lábia</label>
                            <input type="text" name="labia" class="form-control bg-dark text-white" placeholder="Lábia" value="{{$character->labia}}">
                        </div>

                    </div>


                    <div class="col">

                        <div class="form-group mt-1">
                            <label>Empatia Com Animais</label>
                            <input type="text" name="empatia_com_animais" class="form-control bg-dark text-white" placeholder="Empatia Com Animais" value="{{$character->empatia_com_animais}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Ofícios</label>
                            <input type="text" name="oficios" class="form-control bg-dark text-white" placeholder="Ofícios" value="{{$character->oficios}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Condução</label>
                            <input type="text" name="conducao" class="form-control bg-dark text-white" placeholder="Condução" value="{{$character->conducao}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Etiqueta</label>
                            <input type="text" name="etiqueta" class="form-control bg-dark text-white" placeholder="Etiqueta" value="{{$character->etiqueta}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Armas de Fogo</label>
                            <input type="text" name="armas_de_fogo" class="form-control bg-dark text-white" placeholder="Armas de Fogo" value="{{$character->armas_de_fogo}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Armas Brancas</label>
                            <input type="text" name="armas_brancas" class="form-control bg-dark text-white" placeholder="Armas Brancas" value="{{$character->armas_brancas}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Performance</label>
                            <input type="text" name="performance" class="form-control bg-dark text-white" placeholder="Performance" value="{{$character->performance}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Segurança</label>
                            <input type="text" name="seguranca" class="form-control bg-dark text-white" placeholder="Segurança" value="{{$character->seguranca}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Furtividade</label>
                            <input type="text" name="furtividade" class="form-control bg-dark text-white" placeholder="Furtividade" value="{{$character->furtividade}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Sobrevivência</label>
                            <input type="text" name="sobrevivencia" class="form-control bg-dark text-white" placeholder="Sobrevivência" value="{{$character->sobrevivencia}}">
                        </div>

                    </div>


                    <div class="col">

                        <div class="form-group mt-1">
                            <label>Acadêmicos</label>
                            <input type="text" name="academicos" class="form-control bg-dark text-white" placeholder="Acadêmicos" value="{{$character->academicos}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Computador</label>
                            <input type="text" name="computador" class="form-control bg-dark text-white" placeholder="Computador" value="{{$character->computador}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Finanças</label>
                            <input type="text" name="financas" class="form-control bg-dark text-white" placeholder="Finanças" value="{{$character->financas}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Investigação</label>
                            <input type="text" name="investigacao" class="form-control bg-dark text-white" placeholder="Investigação" value="{{$character->investigacao}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Direito</label>
                            <input type="text" name="direito" class="form-control bg-dark text-white" placeholder="Direito" value="{{$character->direito}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Linguística</label>
                            <input type="text" name="linguistica" class="form-control bg-dark text-white" placeholder="Linguística" value="{{$character->linguistica}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Medicina</label>
                            <input type="text" name="medicina" class="form-control bg-dark text-white" placeholder="Medicina" value="{{$character->medicina}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Ocultismo</label>
                            <input type="text" name="ocultismo" class="form-control bg-dark text-white" placeholder="Ocultismo" value="{{$character->ocultismo}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Política</label>
                            <input type="text" name="politica" class="form-control bg-dark text-white" placeholder="Política" value="{{$character->politica}}">
                        </div>

                        <div class="form-group mt-1">
                            <label>Ciência</label>
                            <input type="text" name="ciencia" class="form-control bg-dark text-white" placeholder="Ciência" value="{{$character->ciencia}}">
                        </div>

                    </div>

                </div>
                <hr class="mt-4">

                <div class="row">
                    <div class="col">
                        <div class="form-group mt-1 col-lg-8">
                            <label>Consciência/Convicção</label>
                            <input type="text" id="consciencia/conviccao" onkeyup="humanityCalculation()" name="consciencia_conviccao" class="form-control bg-dark text-white" placeholder="Consciência/Convicção" value="{{$character->consciencia_conviccao}}">
                        </div>
                        <div class="form-group mt-1 col-lg-8">
                            <label>Autocontrole/Instinto</label>
                            <input type="text" id="autocontrole/instintos" onkeyup="humanityCalculation()" name="autocontrole_instintos" class="form-control bg-dark text-white" placeholder="Autocontrole/Instinto" value="{{$character->autocontrole_instintos}}">
                        </div>
                        <div class="form-group mt-1 col-lg-8">
                            <label>Coragem</label>
                            <input type="text" id="coragem" onkeyup="willpowerCalculation()" name="coragem" class="form-control bg-dark text-white" placeholder="Coragem" value="{{$character->coragem}}">
                        </div>          
                    </div>

                    <div class="col mt-5">

                        <div class="col-lg-12 mt-3">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-primary fw-bold" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="row">
                                        <div class="col">
                                            Humanidade
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" id="humanity">
                                            {{$character->humanidade}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 mt-3">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-danger fw-bold" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="row">
                                        <div class="col">
                                            Pontos de Sangue
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" id="bloodPoints">
                                            {{$character->pontos_de_sangue}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 mt-3">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success fw-bold" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="row">
                                        <div class="col">
                                            Força de Vontade
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" id="willpower">
                                            {{$character->forca_de_vontade}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    </div>


                    <div class="col">
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Escolha o seu personagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="masculine-tab" data-toggle="tab" href="#masculine" role="tab" aria-controls="masculine" aria-selected="true">Masculinos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="feminine-tab" data-toggle="tab" href="#feminine" role="tab" aria-controls="feminine" aria-selected="false">Femininos</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="masculine" role="tabpanel" aria-labelledby="masculine-tab">

                                            @if(!empty($allImagesMasculine))
                                                
                                                @foreach($allImagesMasculine as $imageMasculine) 
                                                    <img data-dismiss="modal" onclick="selectCharacter('{{'image-'.$imageMasculine->id}}')" src="{{url("$imageMasculine->character_image")}}" height="200" class="m-4">
                                                    <input id="image-{{$imageMasculine->id}}" type="radio" style="display:none;" value="{{$imageMasculine->character_image}}">
                                                @endforeach

                                            @endif

                                        </div>
                                        <div class="tab-pane fade" id="feminine" role="tabpanel" aria-labelledby="feminine-tab">

                                            @if(!empty($allImagesFeminine))
                                                
                                                @foreach($allImagesFeminine as $imageFeminine) 
                                                    <img data-dismiss="modal" onclick="selectCharacter('{{'image-'.$imageFeminine->id}}')" src="{{url("$imageFeminine->character_image")}}" height="200" class="m-4">
                                                    <input id="image-{{$imageFeminine->id}}" type="radio" style="display:none;" value="{{$imageFeminine->character_image}}">
                                                @endforeach

                                            @endif

                                        </div>
                                    </div>

                                    

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col offset-lg-3">

                            <img src="{{url('img/tokens/masculine/t0.png')}}" id="selectedCharacterImg" height="200" class="m-4" style="cursor:pointer;" data-toggle="modal" data-target="#exampleModal">
                            <input type="hidden" id="checkedImg" name="character_image" value="">

                        </div>
                    </div>

                </div>

                <hr class="mt-4">

                <div class="row">
                    <div class="col-lg-4">
                        
                        <div class="modal fade" id="exampleModalAntecente" tabindex="-1" role="dialog" aria-labelledby="ModalLabelAntecente" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabelAntecente">Antecedentes</h5>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    <div class="modal-body">
            
                                        @include('layouts.antecedentes')

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="offset-lg-3">
                            Antecentes
                        </div>

                        <div class="form-group mt-1">
                            <div class="row" id="antecente">
                                
                            </div>
                        </div>

                        <a class="btn btn-primary mt-5" onclick="addAntecedenteInput()" data-toggle="modal" data-target="#exampleModalAntecente">Escolher</a>

                    </div>

                    <div class="col-lg-4">
                        
                        <div class="offset-lg-3">
                            Disciplinas
                        </div>

                        <div class="form-group mt-1">
                            <div class="row">
                                @foreach($characterDisciplines as $discipline)
                                    <div class="col-lg-9">
                                        <input type="text" id="firstDiscipline" name="disciplina" class="form-control bg-dark text-white mt-2" value="{{$discipline->disciplina}}" readonly>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="pontos" class="form-control bg-dark text-white mt-2" placeholder="Pontos" value="{{$discipline->pontos}}">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-4">

                        <div class="offset-lg-3">
                            Vitalidade
                        </div>
                            
                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Escoriado
                            </div>
                            <div class="col-lg-5">
                                <input name="escoriado" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Machucado
                            </div>
                            <div class="col-lg-5 ">
                                <input name="machucado" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Ferido
                            </div>
                            <div class="col-lg-5">
                                <input name="ferido" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Ferido Gravemente
                            </div>
                            <div class="col-lg-5">
                                <input name="ferido_gravemente" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Espancado
                            </div>
                            <div class="col-lg-5">
                                <input name="espancado" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Aleijado
                            </div>
                            <div class="col-lg-5">
                                <input name="aleijado" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Incapacitado
                            </div>
                            <div class="col-lg-5">
                                <input name="incapacitado" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-5">
                                Morte Final
                            </div>
                            <div class="col-lg-5">
                                <input name="morte_final" class="border vitality" onclick="hitPointControl(this)" style="outline:none;font-color:white;cursor:pointer;font-size:10px;height:25px;width:20px;padding:6px;" readonly>
                            </div>
                        </div>

                    </div>

                </div>

                <hr class="mt-4">

                <button class="btn btn-primary mt-3 col-lg-12 fw-bold">Salvar</button>

            </form>

            
            
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        </div>
    </div>

</div>
@endsection
