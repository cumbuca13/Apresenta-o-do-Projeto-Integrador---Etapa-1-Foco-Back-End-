<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DentistaController;
use App\Http\Controllers\AtendimentoController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('pacientes', PacienteController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('dentistas', DentistaController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('atendimentos', AtendimentoController::class);
});


