<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("index",[
            "categories"=>Category::all(),
            "courses"=>Course::all()
        ]);
    }
}
