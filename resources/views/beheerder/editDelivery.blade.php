@extends('layouts.app')

@section('content')

    <div class="edit__container">
        <div class="form__container">
            <h1>Edit Levering</h1>
            <form action="{{ route('updatedelivery', $delivery->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="item">
                    <p>Bedrijf</p>
                    <input type="text" name="company_name" value="{{ $delivery->company_name }}" />
                    @error('company_name')
                    <div class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="item">
                    <p>Prijs</p>
                    <input type="text" name="price" value="{{ $delivery->price }}" />
                    @error('price')
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