@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">

    <div class="card col-lg-10 p-2 bg-dark text-white border">
        <div class="d-flex justify-content-center">
            <h3 class="navbar-brand" href="{{ url('/') }}">RPG</h3>
        </div>

        <p class="d-flex justify-content-center">Crie o seu personagem</p>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        {{$error}}<br>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST">
            @csrf

            <div class="form-group mt-1">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>

            <div class="form-group mt-3">
                <label>Ocupação</label>
                <input type="text" name="ocupacao" class="form-control" placeholder="Ocupação">
            </div>

            <div class="form-group mt-3">
                <label>Idade</label>
                <input type="text" name="idade" class="form-control" placeholder="Idade">
            </div>

            <div class="form-group mt-3">
                <label>Sexo</label>
                <input type="text" name="sexo" class="form-control" placeholder="Sexo">
            </div>

            <div class="form-group mt-3">
                <label>Peso</label>
                <input type="text" name="peso" class="form-control" placeholder="Peso">
            </div>

            <div class="form-group mt-3">
                <label>Altura</label>
                <input type="text" name="altura" class="form-control" placeholder="Altura">
            </div>

            <div class="form-group mt-3">
                <label>Descreva o seu personagem</label>
                <textarea name="descricao_do_personagem" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3 col-lg-12 fw-bold">Continuar</button>

        </form>

        <small id="info-user-condition" class="form-text text-muted">
            Ao iniciar campanha, você não poderá alterar as informações preechidas acima.
        </small>

    </div>

</div>
@endsection
