<?php
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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
Route::get('/Gaji/index',[GajiController::class,'index']);
Route::get('/Gaji/create',[GajiController::class,'create']);
Route::get('/Gaji/edit',[GajiController::class,'show']);
Route::get('/Home',[IndexController::class,'index']);

Route::get('/jabatan/index',[JabatanController::class,'index']);
Route::get('/jabatan/create',[JabatanController::class,'create']);
Route::get('/jabatan/edit',[JabatanController::class,'show']);

Route::get('/Karyawan/index',[KaryawanController::class,'index']);
Route::get('/Karyawan/create',[KaryawanController::class,'create']);
Route::get('/Karyawan/edit',[KaryawanController::class,'show']);


Route::get('', function () {
    return view('welcome');
});
