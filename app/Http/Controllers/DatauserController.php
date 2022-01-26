<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatauserController extends Controller
{
    public function index(){
        $User = User::all();
        return view('Admin.datauser.datauser',['user'=>$User]);
    }
    public function status($id){
        $user = \DB::table('users')->where('id',$id)->first();

        $status_sekarang = $user->status;

        if($status_sekarang == 1){
            \DB::table('users')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('users')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('/users')->with('status','Anda Berhasil Mengubah!!');
    }
}
