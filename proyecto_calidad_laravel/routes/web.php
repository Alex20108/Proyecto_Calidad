<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriumController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categoria', CategoriumController::class);
Route::resource('productos', ProductoController::class);