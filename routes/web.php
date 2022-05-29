<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("public-index");
Route::get('/contacts', function () {
    return view("public.contact");
})->name("contacts");
Route::get('/devenir-partenaire', function () {
    return view("public.become-partnair");
})->name("become-partnair");
Route::get('/devenir-formateur', function () {
    return view("public.become-teacher");
})->name("become-teacher");

Route::view("dashboard","general.dashboard")->name("dashboard")->middleware(["auth"]);

require __DIR__ . "/auth.php";
