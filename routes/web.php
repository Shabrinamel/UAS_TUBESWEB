<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\mahasiswa;
use App\Http\Controllers\profilController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\pendidikanController;
use App\Http\Controllers\bahanajarController;
use App\Http\Controllers\pengembangandiriController;
use App\Http\Controllers\seminarController;
use App\Models\jabatan;
use App\Models\pendidikan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('mahasiswa',mahasiswaController::class);
Route::resource('profil', profilController::class);
Route::resource('jabatan', jabatanController::class);
Route::resource('pendidikan', pendidikanController::class);
Route::resource('bahanajar', bahanajarController::class);
Route::resource('pengembangandiri', pengembangandiriController::class);
Route::resource('seminar', seminarController::class);


Route::get('/', [logincontroller::class,'index']);

Route::post('/login', [logincontroller::class,'login']);

Route::get('/logout', [logincontroller::class,'logout']);

Route::get('/regist', [signupController::class,'registrasi']);

Route::post('/create/regist', [signupController::class,'create']);
