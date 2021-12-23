@extends('layouts.app')

@section('title', 'La liste des animés trop cool')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection




@section('content')
    <div class="verticalcenter">
        <div>
        <h1 id="loginbigtitle">Connexion </h1>

        <div>
            <form id="loginform" method="post" action="{{ url("/connectionUser") }}">
                @csrf
                <div class="form-group col-md-2">
                    <label>Votre email :</label> 
                    <input class="logininput" type ="email" name="usr_mail" required />
                    <div class="bluebar"></div>
                </div>

                <div class="form-group col-md-2">
                    <label>Votre mot de passe :</label>
                    <input class="logininput" type="password" name="password" required />
                    <div class="bluebar"></div>
                </div>
                <input class="btn btn-primary" type="submit" value="Connexion">
            </form>
        </div>
        <p> <a id="noaccount" href="/register">Vous n'avez pas de compte ?</a><br /></p>
        </div>
    </div>

@endsection
