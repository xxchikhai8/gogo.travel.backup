<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function signin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'erroruser',
            'password.required' => 'errorpass'
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/')->with('notify', '0');
        }
        else {
            return redirect('/')->with('notify', '1');
        }
    }
    public function signout(){
        Auth::logout();
        return redirect('/')->with('notify', '2');
    }
}
