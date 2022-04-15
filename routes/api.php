<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestoController;

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

Route::get('restaurant', [RestoController::class, 'index']);
Route::post('restaurant', [RestoController::class, 'create']);
// Route::put('/restaurant/{id}', [RestoController::class, 'update']);
Route::put('restaurant', [RestoController::class, 'update']);
Route::delete('/restaurant/{id}', [RestoController::class, 'delete']);