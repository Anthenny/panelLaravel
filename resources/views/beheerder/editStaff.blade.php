@extends('layouts.app')

@section('content')

    <div class="edit__container">
        <div class="form__container">
            <h1>Edit Gebruiker</h1>
            <form action="{{ route('updatestaff', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="item">
                    <p>Gebruiker</p>
                    <input type="text" name="name" value="{{ $user->name }}" />
                    @error('name')
                    <div class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="item">
                    <p>Email</p>
                    <input type="email" name="email" value="{{ $user->email }}" />
                    @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="item">
                    <p>Rol</p>
                    <input type="text" name="rol" value="{{ $user->rol }}" />
                    @error('rol')
                    <div class="error">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <button type="submit">Edit</button>
            </form>
        </div>
    </div>

@endsection