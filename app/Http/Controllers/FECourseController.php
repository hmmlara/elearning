<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FECourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
//        $from=$courses->firstItem();
//        $to=$courses->lastItem();
//        echo $from . "," . $to;
        return view('courses',['courses'=>$courses]);
    }

//    public function courseShow()
//    {
////        $course = Course::find($id);
////        dd($course);
//        return view('courseDetails');
//
//    }
}
