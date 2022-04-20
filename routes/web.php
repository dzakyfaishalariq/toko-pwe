<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AdminController;
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
//1
Route::get('/', function () {
    return view('welcome');
});
//2
Route::get('/nama', function () {
    echo "Dzaky Faishalariq";
});
//3
Route::get('/nama/kelas', function () {
    echo "Informatika A";
});
//4
Route::get('/nama/umur', function () {
    echo "19 Tahun";
});
//5
Route::get('/nama/instansi', function () {
    echo "Universitas Bengkulu";
});
//6
Route::get('/nama/alamat', function () {
    echo "Perumahan Guru Bentiring";
});
//7
Route::get('/nama/hobi', function () {
    echo "Belajar";
});
//8
Route::get('/nama/area1', function () {
    echo "Ini area 1";
});
//9
Route::get('/nama/area2', function () {
    echo "Ini area 2";
});
//10
Route::get('/nama/area3', function () {
    echo "Ini area 3";
});
Route::get('/profil', [ProfilController::class, 'awal']);
Route::get('/Admin', [AdminController::class, 'awal']);
Route::get('/Barang', [BarangController::class, 'awal']);
Route::get('/Pembayaran', [PembayaranController::class, 'awal']);
Route::get('/Pesan', [PesanController::class, 'awal']);
Route::get('/Keranjang', [KeranjangController::class, 'awal']);
Route::get('/Login', [LoginController::class, 'awal']);
Route::get('/Registrasi', [RegistrasiController::class, 'awal']);
Route::get('/Post', [PostController::class, 'awal']);
Route::get('/User', [UserController::class, 'awal']);
