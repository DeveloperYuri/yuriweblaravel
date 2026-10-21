<?php

use App\Http\Controllers\Api\LamaranPekerjaanApiController;
use App\Http\Controllers\Api\PekerjaanController;
use Illuminate\Support\Facades\Route;


// Route::apiResource('pekerjaan', PekerjaanController::class);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('lowonganpekerjaan', PekerjaanController::class);

    Route::get('/lamaranpekerjaan', [
        LamaranPekerjaanApiController::class,
        'index',
    ]);

    Route::get('/lamaranpekerjaan/{id}', [
        LamaranPekerjaanApiController::class,
        'show',
    ]);

    Route::patch('/lamaranpekerjaan/{id}/status', [
        LamaranPekerjaanApiController::class,
        'updateStatus',
    ]);

    Route::get('/lamaranpekerjaan/{id}/cv', [
        LamaranPekerjaanApiController::class,
        'downloadCv',
    ]);
});

use App\Http\Controllers\CareerApiProxyController;

