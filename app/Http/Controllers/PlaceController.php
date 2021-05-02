<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Grade;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlaceController extends Controller
{    
    public function index(Request $request) {
        $places = Place::all();
        return view('home',compact('places'));
    }

    public function place($id) {
        $places = Place::find($id);
        $grades = Grade::where('place_id', $id)->get();
        foreach($grades as $grade) {
            $users = Users::where('id', $grade->users_id)->first();
            $grade->author=$users->username;
        }
        return view('place',compact('places', 'grades'));
    }

    public function indexPlace() {
        return view('newPlace');
    }

    public function createPlace(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'country' => 'required',
            'users_id' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('newPlace')->withErrors($validator)->withInput();
        } else {
            $place = new Place();
            $place-> name = $request->name;
            $place-> address = $request->address;
            $place-> city = $request->city;
            $place-> zipcode = $request->zipcode;
            $place-> country = $request->country;
            $place-> users_id = $request->users_id;
            $place->save();
            return redirect()->route('home')->with('message','Your place has been added.');
        }
    }

    public function delete_place($id) {
        $place = Place::find($id);
        if ($place) {
            $place->delete();
            return redirect()->route('home')->with('message','Your place has been deleted.');
        } else {
            return redirect()->route('home')->with('message','A error occured, please try again later.');
        }
    }
}
