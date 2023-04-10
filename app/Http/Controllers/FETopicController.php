<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Topic;
use App\Models\Topics_lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FETopicController extends Controller
{
    public function index($id)
    {

//        dd($id);
        $courses = Course::find($id);
//        $js = $all->toJson();
//        dd($courses->topics->topicLessons);
//        $topics=Topic::where('course_id',$courses->id);
//        $selectTopic = DB::table('topics')
////            ->join('topics', 'courses.id' , '=', 'topics.course_id')
//            ->where('course_id',$courses->id)
//            ->get();

//        $selectTopicLess = DB::table('topics_lessons')
//            ->where('topic_id',$selectTopic[0]->id)
//            ->get();
//        dd($selectTopicLess);
//        $topics_lesson=Topics_lesson::all();
//        dd($topics);
//        $from=$topics->firstItem();
//        $to=$topics->lastItem();
//        $select = DB::table('courses')
//            ->join('topics', 'courses.id' , '=', 'topics.course_id')
//            ->select('topics.topics_name','topics.description')
//            ->get();
//        dd($select);
        return view('courseDetails',['courses'=>$courses]);
    }
}
