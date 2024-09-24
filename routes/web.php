<?php

use App\Http\Controllers\deleteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\ReceitasDespesasController;
use App\Http\Controllers\ReportController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login');
Route::get('/logout', [LoginController::class,'destroy'])->name('logout');
Route::get('/rf', [ReceitasDespesasController::class,'index'])->name('r-fixas');
Route::get('/rv', [ReceitasDespesasController::class,'index'])->name('r-variaveis');
Route::get('/df', [ReceitasDespesasController::class,'index'])->name('d-fixas');
Route::get('/dv', [ReceitasDespesasController::class,'index'])->name('d-variaveis');
Route::post('insert', [InsertController::class,'store'])->name('insert');
Route::get('/delete', [DeleteController::class,'index'])->name('delete');
Route::get('/delete/{id}', [DeleteController::class,'destroy'])->name('delete.destroy');
Route::get('/report', [ReportController::class,'index'])->name('report');
Route::post('/report', [ReportController::class,'pdf'])->name('pdf');

