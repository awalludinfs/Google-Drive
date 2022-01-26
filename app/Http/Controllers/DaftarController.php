<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index(){
        return view('daftar.daftar');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username' => ['required','min:5','max:255'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('success','Regsiter Anda Berhasil!! Silahkan Login');
    }
}
