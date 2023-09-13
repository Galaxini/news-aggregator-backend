<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::group(['prefix' => 'auth'], function () {
    // Registration route
    Route::post('/register', [RegisterController::class, 'create']);

    // Login route
    Route::post('/login', [LoginController::class, 'login']);

    // Routes that require authentication
    Route::middleware('auth:sanctum')->group(function () {
        // Get authenticated user details
        // Route::get('/user', [UserController::class, 'user']);

        // Logout
        Route::post('/logout', [LogoutController::class, 'logout']);
    });
});
