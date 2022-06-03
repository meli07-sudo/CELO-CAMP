<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;

Route::view('auth', "auth.auth")->name("get.auth")->middleware("guest");
Route::view('inscription/email-sent/', 'auth.user-registered-mail-sent')->name("user-registered-user-mail-sent")->middleware(["auth", "email.not.verified"]);
Route::get("verifier-email/{token}/{email}", [UserController::class, "verifyEmail"])->name("verify.email");
Route::get("deconnexion", [UserController::class, "logout"])->middleware("auth")->name("logout");
Route::view("mot-de-passe-oublie", "auth.forgot-password")->name('get.forgot-password');
Route::post("lien-de-reinitialisation", [UserController::class, "getPassowordResetLink"])->name('post.forgot-password');
Route::get("reinitialisation-mot-de-passe/{token}/{email}", [UserController::class, "getPasswordReset"])->name('get.password-reset');
Route::post("reinitialisation-mot-de-passe", [UserController::class, "passwordReset"])->name("post.password-reset");

Route::group(["prefix" => "auth/socials/", 'middleware' => "guest"], function () {
    Route::get("google", function () {
        return Socialite::driver("google")->redirect();
    })->name("get.google.redirect");
    Route::get("github", function () {
        return Socialite::driver("github")->redirect();
    })->name("get.github.redirect");
    Route::get("linkedin", function () {
        return Socialite::driver("linkedin")->redirect();
    })->name("get.linkedin.redirect");
    Route::get("facebook", function () {
        return Socialite::driver("facebook")->redirect();
    })->name("get.facebook.redirect");
});
Route::get("test", function () {
    dd(bcrypt("gossr330@gmail.com"));
});
