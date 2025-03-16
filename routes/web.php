<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlightController; // Add this line to import the controller
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Booking routes
Route::get('/booknow', function () {
    return view('booknow');
})->name('booknow');
Route::post('/booknow', function () {
})->name('booknow.submit');

// Search flight route (GET)
Route::get('/searchflight', function () {
    return view('searchflight');  // Create the searchflight.blade.php view
})->name('searchflight');

// Search flight route (POST)
Route::post('/searchflight', [FlightController::class, 'search'])->name('searchflight.submit');

// End booking route

// Dashboard route with authentication middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile management routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
