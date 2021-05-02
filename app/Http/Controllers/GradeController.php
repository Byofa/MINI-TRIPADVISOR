<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function Creategrade(Request $request) { 
        $validator = Validator::make($request->all(), [
            'grade' => 'required',
            'users_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('place',$request->place_id)->withErrors($validator)->withInput();
        } else {
            $place = new Grade();
            $place-> grade = $request->grade;
            $place-> comment = $request->comment;
            $place-> users_id = $request->users_id;
            $place-> place_id = $request->place_id;
            $place->save();
            return redirect()->route('place',$request->place_id)->with('message','Your grade has been added.');
        }
    }
    public function delete_grade($id) {
        $grade = Grade::find($id);
        if ($grade) {
            $grade->delete();
            return redirect()->route('place',$grade->place_id)->with('message','Your grade has been deleted.');
        } else {
            return redirect()->route('place',$grade->place_id)->with('message','A error occured, please try again later.');
        }
    }
}