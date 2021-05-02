@extends('layouts.app')
@section('content')
<div class="name">
    <hr>
    <h1>{{$places->name}}</h1>
    <hr />
</div>
<div class="placeInfo">
    <div class="englobe">
        <div class="address">
            <p>{{$places->address}}<br>
                {{$places->zipcode}} {{$places->city}}, {{$places->country}}
            </p>
            @if(session('userLogged') == $places->users_id)
            <form action="{{route('delete_place',$places->id)}}" method="Post">
                @csrf
                @method('DELETE')
                <input type="image" src="{{ asset('img/trash.svg') }}" alt="trash" id="trash">
            </form>
            @endif
        </div>
    </div>
</div>
<div class="listGrade">
    <div class="review">
        <h2 class="h2">Add Review</h2>
        @if(session()->has('userLogged'))
        <div class="addGrade">
            <form action="{{route('createGrade')}}" method="Post">
                @csrf
                <div class="newGrade">
                    <label for="grade">Grade</label>
                    <select id="grade" name="grade" required>
                        <datalist id="grade">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </datalist>
                    </select>
                    <label for="comment">Review</label>
                    <textarea rows="10" id="comment" name="comment" placeholder="Write comment..." maxlength="255"></textarea>

                    <input id="users_id" name="users_id" type="hidden" value="{{session('userLogged')}}">
                    <input id="place_id" name="place_id" type="hidden" value="{{$places->id}}">

                    <input type="submit" value="Send grade">

                </div>
            </form>
        </div>
        @endif
        @if(session('message'))
        <div class="msg" role="alert">
            <p>{{session('message')}}</p>
        </div>
        @endif
        <h2 class="h2">Grades & Reviews</h2>
        @foreach ($grades as $grade)
        <div class="grade">
            <hr class="hr">
            <div class="rate">
                <p>author : {{$grade->author}}</p>
                <p>{{$grade->grade}}/5</p>
                @if(session('userLogged') == $grade->users_id)
                <form action="{{route('delete_grade',$grade->id)}}" method="Post">
                    @csrf
                    @method('DELETE')
                    <input type="image" src="{{ asset('img/trash.svg') }}" alt="trash" id="trash">
                </form>
                @endif
            </div>
            <div class="comment">
                <p>{{$grade->comment}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection