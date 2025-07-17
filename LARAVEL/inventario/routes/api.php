<?php

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//ruta de mis productosllklk
Route::get('/productos', function () {
    $productos = Productos::all();
    return response()->json($productos);
});
