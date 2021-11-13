<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarProductionDate;
use App\Http\Controllers\CarProductionDateController;
use App\Http\Controllers\EngineControler;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/car', CarController::class);
Route::resource('/model', CarModelController::class);
Route::resource('/engine', EngineControler::class);
Route::resource('/cpd', CarProductionDateController::class);
Route::resource('/product', ProductController::class);
Auth::routes();
