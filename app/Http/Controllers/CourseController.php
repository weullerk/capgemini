<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::all();
        return view('course.courses')->with('courses', $courses);
    }

    public function details($id)
    {
        $course = Course::find($id);
        return view('course.details')->with('course', $course);
    }

    public function search($search)
    {
        $courses = Course::where('title', 'like', '%' . urldecode($search) .'%')->get();
        return view('course.courses')->with('courses', $courses);
    }
}