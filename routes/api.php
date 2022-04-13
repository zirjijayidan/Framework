<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/karyawan', [KaryawanController::class, 'getKaryawan']);
Route::get('/karyawan/{id}',  [KaryawanController::class, 'getKaryawanById']);
Route::post('/tambahKaryawan', [KaryawanController::class, 'tambahKaryawan']);
Route::put('/updateKaryawan/{id}', [KaryawanController::class, 'updateKaryawan']);
Route::delete('/hapusKaryawan/{id}', [KaryawanController::class, 'hapusKaryawan']);
