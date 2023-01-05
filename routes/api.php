<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\PlantCategoryController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\UserController;


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


Route::middleware(['auth:sanctum', 'verified'])->post('/garden/create', [GardenController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('/garden/delete', [GardenController::class, 'destroy']);


Route::middleware(['auth:sanctum', 'verified'])->post('/create/plant-category', [PlantCategoryController::class, 'createPlantCategory']);
Route::middleware(['auth:sanctum', 'verified'])->post('/delete/plant-category', [PlantCategoryController::class, 'deletePlantCategory']);

//plant
Route::middleware(['auth:sanctum', 'verified'])->post('/plant/create', [PlantController::class, 'create']);
Route::middleware(['auth:sanctum','verified'])->post('/plant/delete', [PlantController::class, 'delete']);
Route::middleware(['auth:sanctum','verified'])->post('/plant/water', [PlantController::class, 'water']);
