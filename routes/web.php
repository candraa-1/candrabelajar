<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halocontroller;

Route::get('/', function () {
    return view('hello');
});

Route::get('/halo', [Halocontroller::class, 'index']);
