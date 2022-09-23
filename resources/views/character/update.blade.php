@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">

    <div class="card col-lg-10 p-2 bg-dark text-white border">
        <div class="d-flex justify-content-center">
            <h3 class="navbar-brand" href="{{ url('/') }}">RPG</h3>
        </div>

        <p class="d-flex justify-content-center">Crie o seu personagem</p>

        <form method="POST" autocomplete="off">
            @csrf

            <div class="row">
                <div class="form-group mt-1 col-lg-4">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control bg-dark text-white" placeholder="Nome">
                </div>

                <div class="form-group mt-1 col-lg-3">
                    <label>Ocupação</label>
                    <select name="ocupacao" class="form-control bg-dark text-white">
                        <option>Ocupação</option>
                        <option value="policial">Policial</option>
                        <option value="feminino">Caçador</option>
                        <option value="feminino">Artista</option>
                        <option value="feminino">Lenhador</option>
                        <option value="feminino">Vendedor</option>
                    </select>
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control bg-dark text-white">
                        <option>Sexo</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
                <div class="form-group mt-1 col-lg-2">
                <label>Idade</label>
                    <input type="text" name="idade" class="form-control bg-dark text-white" placeholder="Idade">
                </div>
            </div>
                
            <div class="row">
                <div class="form-group mt-2 col-lg-6">
                    <label>Peso</label>
                    <input type="text" name="peso" class="form-control bg-dark text-white" placeholder="Peso">
                </div>

                <div class="form-group mt-2 col-lg-6">
                    <label>Altura</label>
                    <input type="text" name="altura" class="form-control bg-dark text-white" placeholder="Altura">
                </div>
            </div>

            <div class="form-group mt-2">
                <label>Descreva o seu personagem</label>
                <textarea name="descricao_do_personagem" class="form-control bg-dark text-white"></textarea>
            </div>

            <small id="info-user-condition" class="form-text text-muted">
                Ao iniciar campanha, você não poderá alterar as informações preechidas acima, ou seja, elas são fixas e ficaram até o fim do seu personagem, pense bem ao preencher.
            </small>

            <hr class="mt-4">

            <div class="row">

                <div class="col">
                    <div class="form-group mt-1 col-lg-12">
                        <label>Força</label>
                        <input type="text" name="forca" class="form-control bg-dark text-white" placeholder="Força">
                    </div>
                    <div class="form-group mt-1 col-lg-12">
                        <label>Destreza</label>
                        <input type="text" name="destreza" class="form-control bg-dark text-white" placeholder="Destreza">
                    </div>
                    <div class="form-group mt-1 col-lg-12">
                        <label>Agilidade</label>
                        <input type="text" name="agilidade" class="form-control bg-dark text-white" placeholder="Agilidade">
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-group mt-1 col-lg-12">
                        <label>Carísma</label>
                        <input type="text" name="carisma" class="form-control bg-dark text-white" placeholder="Carísma">
                    </div>
                    <div class="form-group mt-1 col-lg-12">
                        <label>Manipulação</label>
                        <input type="text" name="manipulacao" class="form-control bg-dark text-white" placeholder="Manipulação">
                    </div>
                    <div class="form-group mt-1 col-lg-12">
                        <label>Aparência</label>
                        <input type="text" name="aparencia" class="form-control bg-dark text-white" placeholder="Aparência">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mt-1 col-lg-12">
                        <label>Percepção</label>
                        <input type="text" name="percepcao" class="form-control bg-dark text-white" placeholder="Percepção">
                    </div>
                    <div class="form-group mt-1 col-lg-12">
                        <label>Inteligência</label>
                        <input type="text" name="inteligencia" class="form-control bg-dark text-white" placeholder="Inteligência">
                    </div>
                    <div class="form-group mt-1 col-lg-12">
                        <label>Raciocínio</label>
                        <input type="text" name="raciocinio" class="form-control bg-dark text-white" placeholder="Raciocínio">
                    </div>
                </div>

            </div>

            <hr class="mt-4">

            <div class="row">

                <div class="form-group mt-1 col-lg-3">
                    <label>Prontidão</label>
                    <input type="text" name="prontidao" class="form-control bg-dark text-white" placeholder="Prontidão">
                </div>

                <div class="form-group mt-1 col-lg-3">
                    <label>Esporte</label>
                    <input type="text" name="esporte" class="form-control bg-dark text-white" placeholder="Esporte">
                </div>

                <div class="form-group mt-1 col-lg-3">
                    <label>Condução</label>
                    <input type="text" name="conducao" class="form-control bg-dark text-white" placeholder="Condução">
                </div>

                <div class="form-group mt-1 col-lg-3">
                    <label>Segurança</label>
                    <input type="text" name="seguranca" class="form-control bg-dark text-white" placeholder="Segurança">
                </div>




                <div class="form-group mt-1 col-lg-3">
                    <label>Briga</label>
                    <input type="text" name="briga" class="form-control bg-dark text-white" placeholder="Briga">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Armas Brancas</label>
                    <input type="text" name="armas_brancas" class="form-control bg-dark text-white" placeholder="Armas Brancas">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Armas de Fogo</label>
                    <input type="text" name="armas_de_fogo" class="form-control bg-dark text-white" placeholder="Armas de Fogo">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Esquiva</label>
                    <input type="text" name="esquiva" class="form-control bg-dark text-white" placeholder="Esquiva">
                </div>




                <div class="form-group mt-1 col-lg-3">
                    <label>Empatia</label>
                    <input type="text" name="empatia" class="form-control bg-dark text-white" placeholder="Empatia">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Expressão</label>
                    <input type="text" name="expressao" class="form-control bg-dark text-white" placeholder="Expressão">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Intimidação</label>
                    <input type="text" name="intimidacao" class="form-control bg-dark text-white" placeholder="Intimidação">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Liderança</label>
                    <input type="text" name="lideranca" class="form-control bg-dark text-white" placeholder="Liderança">
                </div>




                <div class="form-group mt-1 col-lg-3">
                    <label>Manha</label>
                    <input type="text" name="manha" class="form-control bg-dark text-white" placeholder="Manha">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Lábia</label>
                    <input type="text" name="labia" class="form-control bg-dark text-white" placeholder="Lábia">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Empatia Com Animais</label>
                    <input type="text" name="empatia_com_animais" class="form-control bg-dark text-white" placeholder="Empatia Com Animais">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Ofícios</label>
                    <input type="text" name="oficios" class="form-control bg-dark text-white" placeholder="Ofícios">
                </div>




                <div class="form-group mt-1 col-lg-3">
                    <label>Etiqueta</label>
                    <input type="text" name="etiqueta" class="form-control bg-dark text-white" placeholder="Etiqueta">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Performance</label>
                    <input type="text" name="performance" class="form-control bg-dark text-white" placeholder="Performance">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Furtividade</label>
                    <input type="text" name="furtividade" class="form-control bg-dark text-white" placeholder="Furtividade">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Investigação</label>
                    <input type="text" name="investigacao" class="form-control bg-dark text-white" placeholder="Investigação">
                </div>




                <div class="form-group mt-1 col-lg-3">
                    <label>Sobrevivência</label>
                    <input type="text" name="sobrevivencia" class="form-control bg-dark text-white" placeholder="Sobrevivência">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Academico</label>
                    <input type="text" name="academico" class="form-control bg-dark text-white" placeholder="Academico">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Computador</label>
                    <input type="text" name="computador" class="form-control bg-dark text-white" placeholder="Computador">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Idioma</label>
                    <input type="text" name="idioma" class="form-control bg-dark text-white" placeholder="Idioma">
                </div>




                <div class="form-group mt-1 col-lg-3">
                    <label>Medicina</label>
                    <input type="text" name="medicina" class="form-control bg-dark text-white" placeholder="Medicina">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Ocultismo</label>
                    <input type="text" name="ocultismo" class="form-control bg-dark text-white" placeholder="Ocultismo">
                </div>
                <div class="form-group mt-1 col-lg-3">
                    <label>Ciência</label>
                    <input type="text" name="ciencia" class="form-control bg-dark text-white" placeholder="Ciência">
                </div>

            </div>

            <hr class="mt-4">

            <div class="row">
                <div class="col">
                    <div class="form-group mt-1 col-lg-8">
                        <label>Vigor</label>
                        <input type="text" id="vigor" onkeyup="lifeCalculation(), energyCalculation()" name="vigor" class="form-control bg-dark text-white" placeholder="Vigor" title="Essa virtudade é utilizada para difinir as condições físicas do personagem, como resistência, pontos de vida, fôlego entre outras coisas.">
                    </div>
                    <div class="form-group mt-1 col-lg-8">
                        <label>Consciência</label>
                        <input type="text" id="consciencia" onkeyup="sanityCalculation()" name="consciencia" class="form-control bg-dark text-white" placeholder="Consciência">
                    </div>
                    <div class="form-group mt-1 col-lg-8">
                        <label>Autocontrole</label>
                        <input type="text" id="autocontrole" onkeyup="sanityCalculation()" name="autocontrole" class="form-control bg-dark text-white" placeholder="Autocontrole">
                    </div>
                    <div class="form-group mt-1 col-lg-8">
                        <label>Coragem</label>
                        <input type="text" name="coragem" class="form-control bg-dark text-white" placeholder="Coragem">
                    </div>          
                </div>


                <div class="col mt-5">

                    <div class="col-lg-12 mt-3">
                        <div class="progress" style="height: 30px;">
                            <div class="progress-bar bg-danger fw-bold" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="row">
                                    <div class="col">
                                        Vida
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" id="life">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-3">
                        <div class="progress" style="height: 30px;">
                            <div class="progress-bar bg-primary fw-bold" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="row">
                                    <div class="col">
                                        Energia
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" id="energy">
                                        0
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
                                        Sanidade
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" id="sanity">
                                        0
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

                    <div class="col">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Escolha de token
                        </button>

                        <img src="{{url('img/tokens/masculine/t0.png')}}" id="selectedCharacterImg" height="200" class="m-4">
                        <input type="hidden" id="checkedImg" name="character_image" value="">
                    </div>
                </div>

            </div>

            <hr class="mt-4">

            <button type="submit" class="btn btn-primary mt-3 col-lg-12 fw-bold">Continuar</button>

        </form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </div>

</div>
@endsection
