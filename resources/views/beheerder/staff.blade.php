@extends('layouts.app')

@section('content')

    <div class="personeel__container">
        <div class="personeel__tabel">
        <table>
            <thead>
            <th>ID</th>
            <th>Gebruiker</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Actie</th>
            </thead>
            <tbody> 

            @if($users->count())
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rol }}</td>
                        <td class="buttons">
                        <a href="{{ route('editstaff', $user->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('deletestaff', $user) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            @else
                    <p>Er zijn geen medewerkers</p>
            @endif
            </tbody>
        </table>
        <button class="btn-maak-gebruiker">Maak een gebruiker</button>
        </div>
    </div>

    <div class="modal-maak-personeel">
        <div class="box">
        <div class="header">
            <div class="close-personeel"><p>X</p></div>
            <h1>Maak een account</h1>
        </div>

        <form action="{{ route('make_staff') }}" method="post">
            {{csrf_field()}} 
            <div class="item">
            <p>Gebruiker</p>
            <input type="text" name="name" value="{{ old('name') }}"/>
            @error('name')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="item">
            <p>Email</p>
            <input type="email" name="email" value="{{ old('email') }}" />
            @error('email')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="item">
                <p>Rol</p>
                <input type="text" name="rol" value="{{ old('email') }}" />
                @error('rol')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror 
            </div>

            <div class="item">
                <p>Wachtwoord</p>
                <input type="password" name="password" />
                @error('password')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror 
            </div>

            <div class="item">
                <p>Bevestig wachtwoord</p>
                <input type="password" name="password_confirmation" />
                @error('password_confirmation')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror           
            </div>

            <button type="submit" name="add">Voeg toe</button>
        </form>
        </div>
    </div>
    {{-- <script src="../js/modalPersoneel.js"></script> --}}

@endsection