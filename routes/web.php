<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,"index"])->name("homepage");
Route::get('/courses', [CourseController::class,"index"])->name("courses");
Route::get('/courses/cat/{category_id}', [CourseController::class,"courses_by_cat"])->name("courses.by.cat");
Route::get("/cours/{category_id}-{course_id}",[CourseController::class,"show"])->name("course.show");
Route::view('/apropos', "general.about")->name("about");
Route::view('/contact', "general.contacts")->name("contact");
Route::view('/devenir-partenaire', "general.devenir-partenaire")->name("partenaire");
Route::get('teams', 'App\Http\Controllers\TeamController@team')->name('equipe');
Route::group(["middleware" => ["auth"]], function () {
    Route::view('/dashboard', "dashboard")->name("dashboard");
});

require __DIR__ . '/auth.php';
