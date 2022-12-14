@extends('layouts.app1')

@section('content')
<div class="container d-flex justify-content-center">

    <div class="card col-lg-4 p-2 bg-dark text-white border">
        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="{{ url('/') }}">RPG</a>
        </div>

        <p class="d-flex justify-content-center">Crie sua conta</p>

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
                <label>Seu nome</label>
                <input type="name" name="name" class="form-control" placeholder="Seu nome">
            </div>

            <div class="form-group mt-3">
                <label>Seu e-mail</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Seu email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha">
                <small id="info-password" class="form-text text-muted">A senha precisa ter pelo menos 8 caracteres.</small>
            </div>

            <div class="form-group mt-3">
                <label>Insira a senha mais uma vez</label>
                <input type="password" name="password_confirmation" class="form-control" name="" placeholder="Confirmar senha">
            </div>

            <button type="submit" class="btn btn-primary mt-3 col-lg-12 fw-bold">Continuar</button>

        </form>

        <small id="info-user-condition" class="form-text text-muted">
        Ao criar uma conta, voc?? concorda com as Condi????es de Uso do RPG. 
        Por favor verifique a Notifica????o de Privacidade, Notifica????o de Cookies 
        e a Notifica????o de An??ncios Baseados em Interesse.
        </small>

        <small id="info-login" class="form-text text-muted mt-2">
        J?? tem uma conta? <a href="{{ url('/login') }}">Fa??a login</a>
        </small>
    </div>

</div>
@endsection
