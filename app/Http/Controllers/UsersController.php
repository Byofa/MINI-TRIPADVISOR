<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class UsersController extends Controller
{
    public function indexRegister()
    {
        return view('register');
    }

    public function indexLogin()
    {
        return view('login');
    }

    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        } else {
            $user = new Users();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $request->session()->put('userLogged', $user->id);
            $request->session()->put('username', $user->username);
            return redirect()->route('home');
        }
    }
    public function auth(Request $request)
    {
        $messageBag = new MessageBag();
        $messageBag->add('password', 'Password incorect');
        $messageBag->add('username', 'Username incorect');
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }
        $user = Users::all()->where('username', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('userLogged', $user->id);
                $request->session()->put('username', $user->username);
                return redirect()->route('home');
            } else {
                return redirect()->route('register')->with('message', 'Wrong Password.');
            }
        } else {
            return redirect()->route('register')->with('message', 'Username unknown.');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('userLogged');
        $request->session()->forget('username');
        return redirect()->route('home');
    }
}
