<?php

use App\Http\Controllers\AvaliationController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\PacientController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/pacients', [PacientController::class, 'index']);

Route::post('/pacients', [PacientController::class, 'store']);

Route::get('/pacients/{id}', [PacientController::class, 'show']);

Route::put('/pacients/{id}', [PacientController::class, 'update']);

Route::delete('/pacients/{id}', [PacientController::class, 'destroy']);


Route::post('/avaliation/{id}', [AvaliationController::class, 'store']);

Route::get('/avaliation/{id}', [AvaliationController::class, 'show']);

Route::put('/avaliation/{id}', [AvaliationController::class, 'update']);


Route::get('/medical_record/{id}', [MedicalRecordController::class, 'index']);

Route::post('/medical_record/{id}', [MedicalRecordController::class, 'store']);

Route::put('/medical_record/{id}', [MedicalRecordController::class, 'update']);

Route::delete('/medical_record/{id}', [MedicalRecordController::class, 'destroy']);
