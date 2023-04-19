<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Topics_lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Topic_lesson_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topicLessons=Topics_lesson::paginate(3);

        return view('admin.topic_lesson.index',['topicLessons'=>$topicLessons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::all();
        return view('admin.topic_lesson.create',['topics'=>$topics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic_id'=>'required',
            'lesson_name'=>'required',
            'duration'=>'required'
        ]);
        Topics_lesson::create($request->all());
        return redirect()->route('topicLesson.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topicLesson=Topics_lesson::find($id);
        $topics = Topic::all();
        return view('admin.topic_lesson.view',['topiclesson'=>$topicLesson,'topic'=>$topics]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Topics_lesson $topicLesson)
    {
        $topics=Topic::all();
        return view('admin.topic_lesson.edit',['topicLesson'=>$topicLesson,'topics'=>$topics]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topics_lesson $topicLesson)
    {
        $request->validate([
            'topic_id'=>"required",
            'lesson_name'=>"required",
            'duration'=>"required"
        ]);
        $topicLesson->update($request->all());
        return redirect()->route('topicLesson.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('topics_lessons')->where('id',$id)->delete();
        return redirect()->route('topicLesson.index');
    }
}
