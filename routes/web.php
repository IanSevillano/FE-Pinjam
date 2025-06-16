<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DashboardController;

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

//welcome
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

//login
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'loginProses'])->name('loginProses');

//logout
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('checklogin');


//dashboard
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

//user
Route::get('/user', [UserController::class,'index'])->name('user');
 
//pinjam
Route::get('/pinjam', [PinjamController::class,'index'])->name('pinjam');

//ruangan
Route::get('/ruangan', [RuanganController::class,'index'])->name('ruangan');
Route::get('/ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create');
Route::post('/ruangan/store', [RuanganController::class, 'store'])->name('ruangan.store');

Route::get('/ruangan/{id}/edit', [RuanganController::class, 'edit'])->name('ruangan.edit');
Route::put('/ruangan/{id}', [RuanganController::class, 'update'])->name('ruangan.update');




//formulir
Route::get('/formulir', [FormulirController::class,'index'])->name('formulir');

Route::post('/formulir', [FormulirController::class, 'store'])->name('formulir.isi');
//formulir
Route::get('/riwayat', [RiwayatController::class,'index'])->name('riwayat');


