@extends('layouts.app')

@section('content')

<div class="container">

    @if(!empty($allCharacters))
        @foreach($allCharacters as $character)
            <div class="card bg-dark text-white border p-3 mt-3">

                <div class="row p-3">
                    <div class="col-lg-2">
                        <img src="{{url("$character->character_image")}}" height="200" width="" alt="">
                    </div>

                    <div class="col-lg-2">
                        <div class="row">
                            Nome: {{$character->nome}}
                        </div>

                        <div class="row">
                            Sexo: {{$character->sexo}}
                        </div>

                        <div class="row">
                            Idade: {{$character->idade}}
                        </div>

                        <div class="row">
                            Peso: {{$character->peso}}
                        </div>

                        <div class="row">
                            Altura: {{$character->altura}}
                        </div>
                    </div>

                    <div class="col">
                        {{$character->descricao_do_personagem}}
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@endsection