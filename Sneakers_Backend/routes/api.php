<?php

use App\Http\Controllers\KategoriakController;
use App\Http\Controllers\MarkakController;
use App\Http\Controllers\TermekekController;
use App\Http\Controllers\TermekValtozatokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kategoriak', [KategoriakController::class, 'index']);
Route::get('/markak', [MarkakController::class, 'index']);
Route::get('/termekek', [TermekekController::class, 'index']);
Route::get('/termek_valtozatok', [TermekValtozatokController::class, 'index']);