<?php

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

// controller admin route
use App\Http\Controllers\AdminCtrl;
use App\Http\Controllers\LoginCtrl;





Route::get('/', [AdminCtrl::class,'index']);

// Login
Route::get('/login', [LoginCtrl::class,'index']);
Route::post('/login/cek', [LoginCtrl::class,'cek_login']);

Route::get('/logout', [LoginCtrl::class,'logout']);





// data pegawai
Route::get('/dashboard/pegawai/data', [AdminCtrl::class,'pegawai']);
Route::get('/dashboard/pegawai/add', [AdminCtrl::class,'pegawai_add']);
Route::post('/dashboard/pegawai/act', [AdminCtrl::class,'pegawai_act']);

Route::get('/dashboard/pegawai/edit/{id}', [AdminCtrl::class,'pegawai_edit']);
Route::post('/dashboard/pegawai/update', [AdminCtrl::class,'pegawai_update']);
Route::get('/dashboard/pegawai/delete/{id}', [AdminCtrl::class,'pegawai_delete']);


// data anggota
Route::get('/dashboard/anggota/data', [AdminCtrl::class,'anggota']);
Route::get('/dashboard/anggota/add', [AdminCtrl::class,'anggota_add']);
Route::post('/dashboard/anggota/act', [AdminCtrl::class,'anggota_act']);

Route::get('/dashboard/anggota/edit/{id}', [AdminCtrl::class,'anggota_edit']);
Route::post('/dashboard/anggota/update', [AdminCtrl::class,'anggota_update']);
Route::get('/dashboard/anggota/delete/{id}', [AdminCtrl::class,'anggota_delete']);

// data buku sekolah
Route::get('/dashboard/buku_sekolah/data', [AdminCtrl::class,'buku_sekolah']);
Route::get('/dashboard/buku_sekolah/add', [AdminCtrl::class,'buku_sekolah_add']);
Route::post('/dashboard/buku_sekolah/act', [AdminCtrl::class,'buku_sekolah_act']);

Route::get('/dashboard/buku_sekolah/edit/{id}', [AdminCtrl::class,'buku_sekolah_edit']);
Route::post('/dashboard/buku_sekolah/update', [AdminCtrl::class,'buku_sekolah_update']);
Route::get('/dashboard/buku_sekolah/delete/{id}', [AdminCtrl::class,'buku_sekolah_delete']);


// data buku cerita
Route::get('/dashboard/buku_cerita/data', [AdminCtrl::class,'buku_cerita']);
Route::get('/dashboard/buku_cerita/add', [AdminCtrl::class,'buku_cerita_add']);
Route::post('/dashboard/buku_cerita/act', [AdminCtrl::class,'buku_cerita_act']);

Route::get('/dashboard/buku_cerita/edit/{id}', [AdminCtrl::class,'buku_cerita_edit']);
Route::post('/dashboard/buku_cerita/update', [AdminCtrl::class,'buku_cerita_update']);
Route::get('/dashboard/buku_cerita/delete/{id}', [AdminCtrl::class,'buku_cerita_delete']);

// data transaksi

Route::get('/dashboard/transaksi/data', [AdminCtrl::class,'transaksi']);
Route::get('/dashboard/transaksi/add', [AdminCtrl::class,'transaksi_add']);
Route::post('/dashboard/transaksi/act', [AdminCtrl::class,'transaksi_act']);

Route::get('/dashboard/transaksi/edit/{id}', [AdminCtrl::class,'transaksi_edit']);
Route::post('/dashboard/transaksi/update', [AdminCtrl::class,'transaksi_update']);
Route::get('/dashboard/transaksi/delete/{id}', [AdminCtrl::class,'transaksi_delete']);






// role 
Route::get('/dashboard/role/data', [AdminCtrl::class,'role']);
Route::post('/dashboard/role/act', [AdminCtrl::class,'role_act']);

Route::get('/dashboard/role/edit/{id}', [AdminCtrl::class,'role_edit']);
Route::post('/dashboard/role/update', [AdminCtrl::class,'role_update']);
Route::get('/dashboard/role/delete/{id}', [AdminCtrl::class,'role_delete']);

// profile ubah password
Route::get('/dashboard/pengaturan/data', [AdminCtrl::class,'pengaturan']);
Route::post('/dashboard/pengaturan/update', [AdminCtrl::class,'pengaturan_update']);


