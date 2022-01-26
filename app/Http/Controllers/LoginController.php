<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function Authenticate(Request $request){
        $credentials =$request->validate([
            'email' =>'required|email:dns',
            'password' =>'required'
        ]);
        if(Auth::attempt($credentials)){
            session(['email' => $request->email]);
            return redirect()->intended('/layout');
        }

        return back()->with('logineerror','Login is failed!!');
        dd('Anda Berhasil Login');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
