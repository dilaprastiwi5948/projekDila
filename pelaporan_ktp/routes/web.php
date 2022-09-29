<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('operator', MahasiswaController::class);

//registrasi dalam daerah
// Route::get('/pelaporandd', [PelaporanController::class, 'pelaporandd']);
// Route::post('/pelaporandd', [PelaporanController::class, 'store']);
// Route::get('/tampildata', [PelaporanController::class, 'tampildata']);
// Route::get('/pelaporanld', [PelaporanController::class, 'pelaporanld']);

Route::resource('pelaporan', PelaporanController::class);
Route::get('/pencarian', [PelaporanController::class, 'pencarian']);
//Route search
Route::get('/search', [PelaporanController::class, 'search'])->name('search');
// Route::get('/pelaporan', [PelaporanController::class, 'index']);
// Route::get('/pelaporan/tambah',[PelaporanController::class, 'create']);
// Route::post('/pelaporan/store',[PelaporanController::class, 'store']);
// Route::get('/pelaporan/edit/{nik_pelapor}',[PelaporanController::class, 'edit']);
// Route::post('/pelaporan/update',[PelaporanController::class, 'update']);
// Route::get('/pelaporan/hapus/{nik_pelapor}',[PelaporanController::class, 'destroy']);


//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
