@extends('layouts.app')

@section('content')

    <div class="personeel__container">
        <div class="personeel__tabel">
        <table>
            <thead>
            <th>ID</th>
            <th>Bedrijf</th>
            <th>Datum</th>
            <th>Prijs</th>
            <th>Actie</th>
            </thead>
            <tbody> 

            @if($deliveries->count())
                @foreach($deliveries as $delivery)
                    <tr>
                        <td>{{ $delivery->id }}</td>
                        <td>{{ $delivery->company_name }}</td>
                        <td>{{ $delivery->created_at }}</td>
                        <td>{{ $delivery->price }}</td>
                        <td class="buttons">
                        <a href="{{ route('editdelivery', $delivery->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('deletedelivery', $delivery) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            @else
                    <p>Er zijn geen leveringen</p>
            @endif
            </tbody>
        </table>
        <button class="btn-maak-gebruiker">Maak een levering</button>
        </div>
    </div>

    <div class="modal-maak-personeel">
        <div class="box">
        <div class="header">
            <div class="close-personeel"><p>X</p></div>
            <h1>Maak een levering</h1>
        </div>

        <form action="{{ route('make_delivery') }}" method="post">
            {{csrf_field()}} 
            
            <div class="item">
            <p>Bedrijf</p>
            <input type="text" name="company_name" value="{{ old('company_name') }}"/>
            @error('company_name')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="item">
                <p>Prijs</p>
                <input type="text" name="price" value="{{ old('price') }}" />
                @error('price')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror 
            </div>

            <button type="submit" name="add">Voeg toe</button>
        </form>
        </div>
    </div>

@endsection