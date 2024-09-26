<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\ReleaseController;
use App\Http\Controllers\Panel\ReportController;

Route::get('/', function(){ return redirect()->route('panel.home');});

// Route::get('/report', [ReportController::class,'index'])->name('report');
// Route::post('/report', [ReportController::class,'pdf'])->name('pdf');

// Route::resource('/user',UserController::class);
Route::resource('/login',LoginController::class)->names(['index'=>'login']);

Route::name('panel.')->prefix('panel')->group(function(){
    
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/release/{id}',[ReleaseController::class,'create'])->name('release.create');
    Route::resource('/release',ReleaseController::class)->only(['index','destroy']);
    Route::resource('/report',ReportController::class);

});