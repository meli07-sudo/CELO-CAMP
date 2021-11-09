<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view("general.courses",[
            "categories"=>Category::all(),
            "courses"=>Course::all()
        ]);
    }
    public function courses_by_cat($category_id){
        if(Category::find($category_id)!=null){
            $courses_by_cat=Course::where("category_id",$category_id)->get();
            return view("general.courses-cat",[
                "courses"=>$courses_by_cat,
                "categories"=>Category::all(),
            ]);
        }
    }
    public function show($category_id,$course_id){
        if(Category::find($category_id)!=null){
            $course=Course::find($course_id);
            $same_categories_courses=Course::where("id","<>",$course_id)->get();
            return view("general.course",[
                "course"=>$course,
                "same_categories_courses"=>$same_categories_courses
            ]);
        }

    }
}
