<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\PlantCategoryController;
use App\Http\Controllers\PlantController;


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

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginWeb']);
Route::middleware(['auth:sanctum', 'verified'])->post('/create/garden', [GardenController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('/delete/garden', [GardenController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->post('/create/plant-category', [PlantCategoryController::class, 'createPlantCategory']);
Route::middleware(['auth:sanctum', 'verified'])->post('/delete/plant-category', [PlantCategoryController::class, 'deletePlantCategory']);
Route::middleware(['auth:sanctum','verified'])->post('/create/plant', [PlantController::class, 'create']);
Route::middleware(['auth:sanctum','verified'])->post('/delete/plant', [PlantController::class, 'destroy']);

