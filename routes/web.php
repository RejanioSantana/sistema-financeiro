<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\ReleaseController;
use App\Http\Controllers\Panel\ReportController;

Route::get('/', function(){ return redirect()->route('panel.home');});

Route::resource('/login',LoginController::class)->names(['index'=>'login']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::name('panel.')->prefix('panel')->middleware("auth")->group(function(){
    
    Route::get('/release/{id}',[ReleaseController::class,'create'])->name('release.create');
    Route::resource('/release',ReleaseController::class)->only(['index','destroy','store']);
    Route::resource('/report',ReportController::class);
    Route::post('/report/result',[ReportController::class,'report'])->name('report.result');
    Route::get('/',[HomeController::class,'index'])->name('home');

});