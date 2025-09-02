
<?php

use App\Http\Controllers\GoogleController;


// Public Welcome Page (the root of your application)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// The main application home page (dashboard), protected by the 'auth' middleware.
Route::get('/home', function () {
    return view('dashboard');
})->middleware('auth')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/calendar', [GoogleController::class, 'calendar'])->middleware(['auth']);
Route::get('/email', [GoogleController::class, 'email'])->middleware(['auth']);
Route::get('/todos', [GoogleController::class, 'todos'])->middleware(['auth']);

Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Http\Controllers\GoogleAuthController;

Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
require __DIR__.'/auth.php';


