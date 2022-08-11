<?php

use App\Http\Controllers\ClienteController;
use App\Http\Contollers\GerenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes', 'index');
    Route::post('/cliente', 'store');
    Route::get('/cliente/{id}', 'show');
    Route::put('/cliente/{id}', 'update');
    Route::delete('/cliente/{id}', 'destroy');
});

Route::controller(GerenteController::class)->group(function(){
    Route::get('/gerentes', 'index');
    Route::post('/gerente', 'store');
    Route::get('/gerente/{id}', 'show');
    Route::put('/gerente/{id}', 'update');
    Route::delete('/gerente/{id}', 'destroy');
});
