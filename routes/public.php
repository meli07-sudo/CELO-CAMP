<?php

use App\Jobs\SendBecomePartnairEmailJob;
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

Route::get("testing",function(){
    SendBecomePartnairEmailJob::dispatch([
        "nom" => "test",
        "prenom" => "test",
        "email" => "test@gmail.com",
        "tel" => "123456789",
        "nomEnterprise" => "Wyne Enterprise",
        "website" => "http://127.0.0.1:8000/devenir-partenaire",
        "pays" => "Burkina Faso",
        "ville" => "Abidjan",
        "message" =>"Le message de la mort qui tue",
        "formeSociale" => "Nous somme une forme",
        "matriculeOuRegistreCommerce" => "Ok man",
        "file" => "a quelque part",
    ]);
});