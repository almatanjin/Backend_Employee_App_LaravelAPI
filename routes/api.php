<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\DeleteEmployeeController;
use App\Http\Controllers\EditEmployeeController;
use App\Http\Controllers\IndexEmployeeController;
use App\Http\Controllers\StoreEmployeeController;
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

Route::get('/employees', IndexEmployeeController::class);
Route::post('/employees', StoreEmployeeController::class);
Route::put('/employees/{id}', EditEmployeeController::class);
Route::delete('/employees/{id}', DeleteEmployeeController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});
