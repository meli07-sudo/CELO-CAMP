<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::group(["middleware" => ['guest']], function () {
    Route::get('/auth', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::get('/auth/inscription', [AuthenticatedSessionController::class, 'create'])->name('logup');
    Route::get('/mot-de-passe-oublie', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::get("/auth/social/google", [SocialAuth::class, "googleRedirect"])->name("login.google");
    Route::get("auth/social/google/callback", [SocialAuth::class, "googleCallback"]);
    Route::get("/auth/social/github", [SocialAuth::class, "githubRedirect"])->name("login.github");
    Route::get("auth/social/github/callback", [SocialAuth::class, "githubCallback"]);
    Route::get("/auth/social/facebook", [SocialAuth::class, "facebookRedirect"])->name("login.facebook");
    Route::get("auth/social/facebook/callback", [SocialAuth::class, "facebookCallback"]);
});
Route::group(['middleware' => ["auth"]], function () {
    Route::get('/verifyicationemail/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('/deconnexion', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


    Route::get('/verification-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    
    Route::get('/confirmation-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirmation-password', [ConfirmablePasswordController::class, 'store']);


    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware(['throttle:6,1'])->name('verification.send');
});
