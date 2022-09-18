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

                    <div class="col-2">
                        

                        <a type="submit" class="btn btn-danger" href="{{route('deleteCharacter', ['id' => $character->id])}}" onclick="alert('Tem certeza que deseja excluir?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>

                        
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@endsection