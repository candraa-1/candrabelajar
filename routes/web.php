<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halocontroller;
use App\Http\Controllers\belajarcontroller;
use App\Http\Controllers\day2controller;
use App\Http\Controllers\perpuscontroller;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\datasiswaController;

Route::get('/', function () {
    return view('hello');
});


Route::get('/halo', [Halocontroller::class, 'index']);

Route::get('/test', [belajarcontroller::class, 'index']);
Route::get('/test/{nama}', [belajarcontroller::class, 'getnama']);

Route::get('/halaman2', [day2controller::class, 'index']);

Route::get('/halaman3', [day2controller::class, 'tampilan']);

Route::get('/selamat', [perpuscontroller::class, 'index']);
Route::get('/selamat/{cabang}', [perpuscontroller::class, 'getcabang']);
Route::post('/post', [perpuscontroller::class, 'postcabang'])->name('selamat');

Route::post('/barang/add' , [BarangController::class, 'store'])->name('barang.kirim');
Route::get('/barang/add' , [BarangController::class, 'store_view'])->name('barang.tambah');


Route::get('/barang/update/{id}' , [BarangController::class, 'update_view'])->name('barang.edit');
Route::put('/barang/update/{id}' , [BarangController::class, 'update'])->name('barang.update');

Route::get('/barang/delete/{id}' , [BarangController::class, 'destroy'])->name('barang.delete');
Route::get('/barang' , [BarangController::class, 'index']);

Route::post('/siswa/add' , [datasiswaController::class, 'store'])->name('siswa.kirim');
Route::get('/siswa/add' , [datasiswaController::class, 'siswa_view'])->name('siswa.tambah');


Route::get('/siswa/update/{id}' , [datasiswaController::class, 'update_view'])->name('siswa.edit');
Route::put('/siswa/update/{id}' , [datasiswaController::class, 'update'])->name('siswa.update');

Route::get('/siswa/delete/{id}' , [datasiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('/siswa' , [datasiswaController::class, 'index']);