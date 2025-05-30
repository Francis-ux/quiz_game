<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', fn() => redirect('/login'));

// Auth
Route::get('/register', [RegisteredUserController::class, 'index'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

// Game
Route::middleware('auth')->group(function () {
    Route::get('/play', [QuizController::class, 'play'])->name('play');
    Route::post('/submit-score', [QuizController::class, 'submitScore'])->name('submitScore');
    Route::get('/leaderboard', [QuizController::class, 'leaderboard'])->name('leaderboard');
});
