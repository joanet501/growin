<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\PlantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/register-web', function () {
    return view('registro');
});
Route::post('/auth/login', [AuthController::class, 'loginWeb']);

Route::group(['middleware' => ['web']], function () {
    Route::post('/plant/delete', [PlantController::class, 'delete']);
    Route::post('/plant/create', [PlantController::class, 'create']);
    Route::post('/plant/water', [PlantController::class, 'water']);

    Route::post('/auth/register', [AuthController::class, 'createUser']);
});


    Route::get('/', function () {
        return view('index');
    });




