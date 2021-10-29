<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index");
});

Route::get('teams','App\Http\Controllers\TeamController@team')->name('equipe');
