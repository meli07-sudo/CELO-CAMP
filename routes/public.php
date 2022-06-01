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
