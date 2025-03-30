<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\PegawaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->name('api.')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->name('user');

    Route::apiResource('pegawai', PegawaiController::class);
    Route::apiResource('mahasiswa', MahasiswaController::class);
});
