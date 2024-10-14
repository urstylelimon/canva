<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', [VerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
///////////
Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'index');
    Route::post('register', 'store');
});