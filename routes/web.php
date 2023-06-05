<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned
| to the "web" middleware group. Make something great!
|
*/

// Default welcome route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with authentication and email verification middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Routes requiring authentication and email verification middleware
Route::middleware(['auth', 'verified'])->group(function () {
    // Users index route
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Profile edit route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    // Profile update route
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Profile delete route
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';
