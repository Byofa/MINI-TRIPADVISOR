@extends('layouts.app')
@section('content')
<div class="createPlace">
    <form action="{{route('createPlace')}}" method="Post">
        @csrf
        <div>
            <input type="text" id="name" name="name" placeholder="Name" required maxlength="30" autofocus>
        </div>
        <div>
            <input type="text" id="address" name="address" placeholder="Address" required minlength="8" maxlength="255">
        </div>
        <div>
            <input type="text" id="city" name="city" placeholder="City" required maxlength="50">
        </div>
        <div>
            <input type="number" id="zipcode" name="zipcode" placeholder="Zipcode" required max="99999" min="11111">
        </div>
        <div>
            <input type="text" id="country" name="country" placeholder="Country" required maxlength="50">
        </div>
        <div>
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