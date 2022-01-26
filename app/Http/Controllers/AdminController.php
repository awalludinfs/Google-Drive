<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admins;
Use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('Admin.loginadmin');
    }
    public function Authenticate(Request $request){
        $credentials =$request->validate([
            'email' =>'required|email:dns',
            'password' =>'required'
        ]);
        if(Auth::attempt($credentials)){
            session(['email' => $request->email]);
            return redirect()->intended('/halamanadmin');
        }

        return back()->with('logineerror','Login is failed!!');
        dd('Anda Berhasil Login');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
