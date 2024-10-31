<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RutasController;


Route::get('/', [HomeController::class,'index']);
Route::get('/rutas', [RutasController::class,'index']);


