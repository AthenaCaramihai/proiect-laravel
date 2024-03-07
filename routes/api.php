<?php

use Illuminate\Http\Request;
use App\Http\API\HomepageController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('store', [HomepageController::class, 'store']);
Route::get('index',[HomepageController::class, 'index']);
Route::get('/person/{id}', [HomepageController::class, 'show']);
Route::put('/person/{id}', [HomepageController::class, 'update']);
Route::delete('/person/{id}', [HomepageController::class, 'destroy']);


