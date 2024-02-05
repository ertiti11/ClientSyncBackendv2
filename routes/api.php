<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/', [apiController::class, 'index']);

Route::get('/unauthorized', function () {
    return response()->json(['message' => 'Unauthorized'], 401);
});


Route::post('/login', [apiController::class, 'login']);

Route::get('/ping', [apiController::class, 'ping']);

Route::get('/clients', [apiController::class, 'clients']);

Route::get('/jobs', [apiController::class, 'jobs']);