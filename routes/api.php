<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WorkController;

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



Route::get('/', [ClientController::class, 'index']);

Route::get('/unauthorized', function () {
    return response()->json(['message' => 'Unauthorized'], 401);
})->name('unauthorized');


// todas las rutas que crees aqui tendras /api delante




// CLIENTS






// WORKS
if (env('APP_ENV') === 'prod') {
    Route::middleware('auth:sanctum')->group(function () {
        //WORKS
        Route::get('/works', [WorkController::class, 'index']);
        Route::post('/updatework', [WorkController::class, 'update']);
        Route::post('/deletework', [WorkController::class, 'delete']);
        Route::post('/creatework', [WorkController::class, 'create']);
        
        //CLIENT
        Route::get('/clients', [ClientController::class, 'index']);
        Route::post('/updateclient', [ClientController::class, 'update']);
        Route::post('/deleteclient', [ClientController::class, 'delete']);
        Route::post('/createclient', [ClientController::class, 'create']);

    });
} else {
    //WORKS
    Route::get('/works', [WorkController::class, 'index']);
    Route::post('/updatework', [WorkController::class, 'update']);
    Route::post('/deletework', [WorkController::class, 'delete']);
    Route::post('/creatework', [WorkController::class, 'create']);

    //CLIENT
    Route::get('/clients', [ClientController::class, 'index']);
    Route::post('/updateclient', [ClientController::class, 'update']);
    Route::post('/deleteclient', [ClientController::class, 'delete']);
    Route::post('/createclient', [ClientController::class, 'create']);

}



