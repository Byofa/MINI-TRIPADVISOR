@extends('layouts.app')
@section('content')
<div class="createPlace">
    <form action="{{route('createPlace')}}" method="Post">
        @csrf
        <div class="input">
            <p class="underline">Add new Place</p>
            <label for="name">Name</label>
            <input type="text" id="name" name="name"required maxlength="30" autofocus>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required minlength="8" maxlength="255">

            <label for="city">City</label>
            <input type="text" id="city" name="city" required maxlength="50">

            <label for="zipcode">Zipcode</label>
            <input type="number" id="zipcode" name="zipcode" required max="99999" min="11111">
            
            <label for="country">Country</label>
            <input type="text" id="country" name="country" required maxlength="50">
            @error('country')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors }}</strong>
            </span>
            @enderror
            <input id="users_id" name="users_id" type="hidden" value="{{session('userLogged')}}">
            <input type="submit" value="Create New Place">
        </div>
    </form>
</div>
@endsection