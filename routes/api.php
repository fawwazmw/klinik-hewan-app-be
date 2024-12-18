<?php

use App\Http\Controllers\Api\DokterController;
use App\Http\Controllers\Api\HewanController;
use App\Http\Controllers\Api\InformasiController;
use App\Http\Controllers\Api\KesehatanController;
use App\Http\Controllers\Api\ObatController;
use App\Http\Controllers\Api\PerkembanganController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Registrasi pengguna baru (untuk API)
Route::post('register', [RegisteredUserController::class, 'store']);

// Login pengguna (untuk API)
Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Route untuk mendapatkan data pengguna yang sudah login
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('hewan',[HewanController::class,'index']);
// Route::get('hewan/{id}',[HewanController::class,'show']);
// Route::post('hewan',[HewanController::class,'store']);
// Route::put('hewan/{id}',[HewanController::class,'update']);
// Route::delete('hewan/{id}',[HewanController::class,'destroy']);

Route::middleware('auth:sanctum')->apiResource('hewan', HewanController::class);
Route::middleware('auth:sanctum')->apiResource('kesehatan', KesehatanController::class);
Route::middleware('auth:sanctum')->apiResource('perkembangan', PerkembanganController::class);
Route::middleware('auth:sanctum')->apiResource('obat', ObatController::class);
Route::middleware('auth:sanctum')->apiResource('dokter', DokterController::class);
Route::middleware('auth:sanctum')->apiResource('informasi', InformasiController::class);
