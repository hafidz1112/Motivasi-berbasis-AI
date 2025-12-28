<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MoodController;
use App\Services\GeminiService;

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/welcome', function () {
        return view('welcome-ai');
    })->name('welcome');

    Route::get('/pilih-mood', function () {
        return view('pilih-mood');
    })->name('mood');

    // PROSES PILIH MOOD (POST)
    Route::post('/mood', [MoodController::class, 'store'])
        ->name('mood.store');

    // HASIL MOTIVASI
    Route::get('/hasil-motivasi', [MoodController::class, 'result'])
        ->name('motivasi.result');

    // TEST GEMINI (DEV ONLY)
    Route::get('/test-gemini', function (GeminiService $gemini) {
        return $gemini->generateMotivation('cemas');
    });
});
