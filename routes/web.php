<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halocontroller;
use App\Http\Controllers\belajarcontroller;
use App\Http\Controllers\day2controller;
use App\Http\Controllers\perpuscontroller;

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
// Route::post('/post', function() {return 'berhasil';});