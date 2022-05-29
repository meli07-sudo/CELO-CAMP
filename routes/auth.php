<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('auth', "auth.auth")->name("get.auth")->middleware("guest");
Route::view('inscription/email-sent/', 'auth.user-registered-mail-sent')->name("user-registered-user-mail-sent")->middleware(["auth","email.not.verified"]);
Route::get("verifier-email/",[UserController::class,"verifyEmail"])->name("verify.email");

// Route::view("auth/google",function(){
//     return Socialite::redirect();
// })->middleware("guest")->name("get.google.redirect");

Route::get("test/",function(){
    dd(route('verify.email',["email"=>"ezrrzr",'token'=>"ehdhdhdh"]));
});