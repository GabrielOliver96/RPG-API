@extends('layouts.app1')

@section('content')
<div class="container d-flex justify-content-center">

    <div class="card col-lg-4 p-2 bg-dark text-white border mt-5">

        @if(!empty(session('loginValidation')))
            <div class="alert alert-danger">
                <ul>
                    {{session('loginValidation')}}
                </ul>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="{{ url('/') }}">RPG</a>
        </div>

        <form method="POST">
            @csrf

            <div class="form-group mt-3">
                <label>Seu e-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Seu email">
            </div>

            <div class="form-group mt-3">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha">
                <small id="info-password" class="form-text text-muted"><a href="#">Esqueci minha senha.</a></small>
            </div>

            <button type="submit" class="btn btn-primary mt-3 col-lg-12">Continuar</button>

        </form>

        <small id="info-user-register" class="form-text text-muted mt-3">
            Ainda não tem uma conta? <a href="{{ url('/register') }}">Crie uma</a>.
        </small>

        <small id="info-user-condition" class="form-text text-muted mt-3">
            Ao continuar, você concorda com as Condições de Uso e com a Política 
            de Privacidade do RPG.
        </small>

    </div>

</div>
@endsection
