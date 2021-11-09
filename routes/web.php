<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,"index"])->name("homepage");
Route::view('/cours', "general.courses")->name("courses");
Route::view('/apropos', "general.about")->name("about");
Route::view('/contact', "general.contacts")->name("contact");

Route::get('teams', 'App\Http\Controllers\TeamController@team')->name('equipe');

Route::group(["middleware" => ["auth"]], function () {
    Route::view('/dashboard', "dashboard")->name("dashboard");
});

require __DIR__ . '/auth.php';
