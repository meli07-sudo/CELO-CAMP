<?php
use Illuminate\Support\Facades\Route;

Route::group(["middleware"=>"auth"],function(){
    Route::view("dashboard","general.dashboard")->name("dashboard");
});