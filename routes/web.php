<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notasController;

Route::get('/notas',[notasController::class, 'index'])->name('notas.index');

Route::post('/notas/calcular',[notasController::class,'calcular']);

Route::post('/notas/store',[notasController::class,'store'])->name('notas.store');  

Route::get('/notas/show', [notasController::class,'show']);

Route::put('notas/update/{id}',[notasController::class,'update'])->name('notas.update');

Route::delete('imc/delete/{id}',[notasController::class,'destroy'])->name('notas.delete');
