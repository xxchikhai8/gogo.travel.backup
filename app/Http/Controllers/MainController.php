<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
        $flights=DB::table('flights')->paginate(10);
        return view('index', compact('flights'));
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
            if (Auth::user()->role=='admin') {
                return redirect('/admin')->with('notify', 'admin');
            }
            else if (Auth::user()->role=='enterprise') {
                return redirect('/enterprise')->with('notify', 'enterprise');
            }
            else {
                    return redirect('/')->with('notify', 'active');
            }
            // else {
            //     return redirect('/')->with('notify', '0');
            // }
        }
        else {
            return redirect('/')->with('notify', '1');
        }
    }

    public function signout() {
        Auth::logout();
        return redirect('/')->with('notify', '2');
    }
}
