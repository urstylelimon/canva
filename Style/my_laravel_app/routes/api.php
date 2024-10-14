<?php

// routes/api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Mail;


// Route::post('register', [AuthController::class, 'register']);
// Route::post('login', [AuthController::class, 'login']);
// Route::middleware('auth:api')->get('user', [AuthController::class, 'user']);
// Route::post('register', [AuthController::class, 'register']);
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
// Route::get('/profile', function () {
//     // Only verified users may access this route...
// })->middleware(['auth', 'verified']);
// ////
// <?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('user', [AuthController::class, 'user']);

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware('throttle:6,1')->name('verification.send');
});
Route::get('/test-mail', function () {
    Mail::raw('Hello, this is a test email!', function ($message) {
        $message->to('test@example.com')->subject('Test Email');
    });

    return 'Mail sent!';
});
