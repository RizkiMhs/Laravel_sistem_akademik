<?php

use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
    return response()->json(['message' => 'Halo dari API Laravel 12!']);
});

Route::get('program-studi', [App\Http\Controllers\Api\ProgramStudiController::class, 'index']);
Route::get('program-studi/{id}', [App\Http\Controllers\Api\ProgramStudiController::class, 'show']);

Route::get('pengumuman', [App\Http\Controllers\Api\PengumumanController::class, 'index']);
Route::get('pengumuman/{id}', [App\Http\Controllers\Api\PengumumanController::class, 'show']);
Route::post('pengumuman', [App\Http\Controllers\Api\PengumumanController::class, 'store']);
Route::put('pengumuman/{id}', [App\Http\Controllers\Api\PengumumanController::class, 'update']);    
Route::delete('pengumuman/{id}', [App\Http\Controllers\Api\PengumumanController::class, 'destroy']);
