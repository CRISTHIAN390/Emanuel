<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RutasController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/emanuel/Equipo', [RutasController::class,'NuestroEq'])->name('cat_rutaEq');
Route::get('/emanuel/Vision', [RutasController::class,'Vision'])->name('cat_rutaVis');
Route::get('/emanuel/RCS', [RutasController::class,'Responsabilidad'])->name('cat_rutarsc');


//Servicios
Route::get('/emanuel/materiales', [RutasController::class,'Materiales'])->name('serv_materia');
Route::get('/emanuel/hotel', [RutasController::class,'Hotel'])->name('serv_hotel');
Route::get('/emanuel/complejo', [RutasController::class,'ComplejoDeportivo'])->name('serv_complejo');
Route::get('/emanuel/proferreteria', [RutasController::class,'Ferreteria'])->name('serv_ferreteria');
Route::get('/emanuel/servicentro', [RutasController::class,'Servicentro'])->name('serv_servicentro');




