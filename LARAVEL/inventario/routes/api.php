<?php

use App\Http\Controllers\ProductosController;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//ruta de mis productos
Route::get('/productos',[ProductosController::class,'index']);