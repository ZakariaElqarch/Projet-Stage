@extends('layouts.layout')

@section('content')
<div class="main-page login-page ">
    <h3 class="title1">SignIn Page</h3>
    <div class="widget-shadow">
        <div class="login-top">
            <h4>Bienvenue <br> vous n'êtes pas membre ? <a href="signup.html"> Sign Up »</a> </h4>
        </div>
        <div class="login-body">

            <a href={{ route('login') }} class="login-link ">
                <button name="Sign In" value="Sign In" class="login">Login</button>
            </a>
        </div>
    </div>
</div>
@endsection