<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\AuthController;

/**
 * Mewin' & Brewin' Cat Café Routes
 * CSC 4610 - ICA8 Laravel Practice
 */

// Home page route
Route::get('/', function () {
    return view('index');
})->name('home');

// Authentication Routes (only accessible to guests)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logout route (only for authenticated users)
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// Public cat routes (accessible to everyone)
Route::get('/cats', [CatController::class, 'index'])->name('cats.index');
Route::get('/cat/{id}', [CatController::class, 'show'])->where('id', '[0-9]+')->name('cats.show');

// Protected cat routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::get('/cats/create', [CatController::class, 'create'])->name('cats.create');
    Route::post('/cats', [CatController::class, 'store'])->name('cats.store');
    Route::delete('/cat/{id}', [CatController::class, 'destroy'])->where('id', '[0-9]+')->name('cats.destroy');
});

// Menu page route
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// Contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
