<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drivesayas;

class DrivesayaController extends Controller
{
    public function index(){
        $Drivesayas = Drivesayas::all();
        return view('halamandrive.drive',['Drivesayas'=>$Drivesayas]);
    }
    public function tambah(){
        return view('halamandrive.tambah');
    }
    public function store(Request $request)
    {
        $Drivesaya=Drivesayas::create($request->all());
        return redirect('/drivesaya')->with('status','Anda Berhasil Upload');
    }
    public function baru(){
        $Drivesayas = Drivesayas::all();
        return view('terbaru.baru',['Drivesayas'=>$Drivesayas]);
    }
    public function detail(){
        return view('terbaru.detail');
    }
}
