<?php

use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "auth"], function () {
    Route::view("dashboard", "general.dashboard")->name("dashboard");
    Route::get('/devenir-formateur', function () {
        return view("public.become-teacher");
    })->name("become-teacher");
});
