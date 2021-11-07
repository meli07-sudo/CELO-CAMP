<?php

use Illuminate\Support\Facades\Route;

Route::view('/', "index")->name("homepage");
Route::view('/cours', "index")->name("courses");
Route::view('/apropos', "index")->name("about");
Route::view('/contact', "index")->name("contact");

Route::get('teams', 'App\Http\Controllers\TeamController@team')->name('equipe');

Route::group(["middleware" => ["auth"]], function () {
    Route::view('/dashboard', "dashboard")->name("dashboard");
});

require __DIR__ . '/auth.php';
