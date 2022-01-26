<?php
//User
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DrivesayaController;

//admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatauserController;
Use App\Http\Controllers\DatafileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//admin
Route::get('/admins',[AdminController::class, 'login']);
Route::post('/admnis',[AdminController::class, 'Authenticate']);

//halamanadmin
Route::get('/halamanadmin', function(){
    return view('Admin.navbaradmin.utama');
});

//Users (admin)
Route::get('/users',[DatauserController::class, 'index']);
Route::get('/datauser/status/{id}',[DatauserController::class, 'status']);
Route::get('/detailusers',[DatafileController::class, 'detail']);
//(Belum Selesai!!)

//File Data User(admin)
Route::get('/fileuser',[DatafileController::class,'index']);
// Route::get('/datafile/destroy/{id}',[DtafileController::class, 'destroy']);


//Login
Route::get('/',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'Authenticate']);

//Logout
Route::post('logout',[LoginController::class, 'logout'])->name('logout');

//Daftar (Regsiter)
Route::get('/daftar',[DaftarController::class, 'index']);
Route::post('/daftar',[DaftarController::class, 'store']);

//Navbar
Route::get('/layout', function () {
    return view('layout.main');
});

//Drive Saya File
Route::get('/drivesaya',[DrivesayaController::class, 'index']);
Route::get('/drivesaya/tambahfile',[DrivesayaController::class, 'tambah']);
Route::post('tambah',[DrivesayaController::class, 'store'])->name('tambah');

//Drive Saya Folder
// Route::get('/drivesaya/tambahfolder',[DrivesayaController::class, 'tambahfolder']);
// Route::post('ftambah',[DrivesayaController::class, 'stores'])->name('ftambah');

//Terbaru
Route::get('/terbaru',[DrivesayaController::class,'baru']);

//detail
Route::get('/detail',[DrivesayaController::class,'detail']);

Route::get('/komputer', function(){
    return view('komputer.halamanawal');
});
