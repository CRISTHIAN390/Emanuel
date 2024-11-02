<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RutasController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/emanuel/Equipo', [RutasController::class,'NuestroEq'])->name('cat_rutaEq');
Route::get('/emanuel/Vision', [RutasController::class,'Vision'])->name('cat_rutaVis');
Route::get('/emanuel/RCS', [RutasController::class,'Responsabilidad'])->name('cat_rutarsc');



