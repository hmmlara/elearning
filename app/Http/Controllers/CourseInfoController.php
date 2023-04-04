<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseInfoController extends Controller
{
    //
    public function show()
    {
        //
        // dd("hee Hee")
        $all = DB::table('courses')
            ->join('batches', 'courses.id', '=', 'batches.course_id')
            ->join('course_trainers', 'course_trainers.batch_id', '=', 'batches.id')
            ->join('trainers', 'course_trainers.trainer_id', '=', 'trainers.id')
            ->select('courses.title', 'courses.hours', 'courses.total_topics', 'trainers.name', 'batches.batch_name', 'courses.feature_img', 'courses.fee')
            ->get();
        // dd($all);

        return view('courses', ['all_info' => $all]);
    }
}
