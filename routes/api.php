<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Routes within the 'auth:sanctum' middleware group
Route::middleware('auth:sanctum')->group(function () {
    // Logout route
    Route::post('logout', [AuthController::class, 'logout']);

    // Logout other tokens route
    Route::post('/logout-other-tokens', [AuthController::class, 'logoutOtherTokens']);
});

// Login route with throttling middleware
Route::middleware('throttle:3,0.5')->post('login', [AuthController::class, 'login']);
