<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('kegiatans', KegiatanController::class);