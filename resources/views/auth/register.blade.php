@extends('layouts.auth')

@section('content')

    <div class="registreer__container">
        <div class="left">
        <img src="{{ asset('img/chef.png') }}" alt="" />
        </div>
        <div class="right">
        <h1>Registreren</h1>
        <h3>Welkom</h3>
        <form action="{{ route('register') }}" method="post">
            {{csrf_field()}} 

            @error('name')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <input type="text" placeholder="Vul uw naam in" name="name" value="{{ old('name') }}" />

            @error('email')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <input type="email" name="email" placeholder="Vul jouw email in" value="{{ old('email') }}"/>

            @error('password')
            <div class="error">
                {{ $message }}
            </div>
            @enderror 
            <input type="password" name="password" placeholder="Vul jouw wachtwoord in" />

            @error('password_confirmation')
            <div class="error">
                {{ $message }}
            </div>
            @enderror           
            <input type="password" name="password_confirmation" placeholder="Bevestig jouw wachtwoord" />

            <button type="submit" name="register">Registreren</button>
            <p>Al een account? <a href="/login">Login!</a></p>
        </form>
        </div>
    </div>

@endsection