<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drivesayas;

class DatafileController extends Controller
{
    public function index(){
      $Drivesayas = Drivesayas::all();
      return view('Admin.Datafile.datafile',['Drivesayas'=>$Drivesayas]);
        
    }
    public function detail(){
      return view('Admin.datauser.detailuser');
  }
    // public function destroy($id){
    //   $Drivesayas::table('drivesayas')->where('id',$id)->delete();
    //   return redirect('/fileuser')->with('status','Data Berhasil Di hapus');
    // }
}
