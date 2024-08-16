<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
//login//
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login_check', [AuthController::class, 'login_check'])->name('login_check');

//register//
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

//logut//
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//mindleware//
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/pegawai', [PegawaiController::class, "index"])->name('pegawai');
    Route::get('/pegawai/create', [PegawaiController::class, "create"])->name('pegawai.create');
    Route::post('/pegawai/post', [PegawaiController::class, 'store'])->name('pegawai.post');
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, "edit"])->name('pegawai.edit');
    Route::put('/pegawai/{id}', [PegawaiController::class, "update"])->name('pegawai.update');
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

    //pelangan//
    Route::resource('pelanggan', PelangganController::class);

    //obat//
    Route::resource('obat', ObatController::class);

    Route::resource('transaksi', TransaksiController::class);
});
