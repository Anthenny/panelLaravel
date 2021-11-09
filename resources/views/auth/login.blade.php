@extends('layouts.auth')

@section('content')

    <div class="login__container">
        <div class="left">
        <img src="{{ asset('img/chef.png') }}" alt="" />
        </div> 

        <div class="right">

        <h1>Log in</h1>
        <h3>Welkom terug</h3>

        <form action="{{ route('login') }}" method="post">
            {{csrf_field()}} 
            <input type="text" name="email" placeholder="Vul jouw email in" />
            @error('email')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
    
            <input type="password" name="password" placeholder="Vul jouw wachtwoord in" />
            @error('password')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            
            <button type="submit" name="login">Login</button>
            <p>Geen account? <a href="/register">Registreer nu!</a></p>
        </form>
        </div>
    </div>

@endsection