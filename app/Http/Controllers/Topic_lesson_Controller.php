<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Topics_lesson;
use Illuminate\Http\Request;

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
        $from=$topicLessons->firstItem();
        $to=$topicLessons->lastItem();
        return view('admin.topic_lesson.index',['topicLessons'=>$topicLessons,'from'=>$from]);
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
        $lessons=Topics_lesson::find($id);
        return view('admin.topic_lesson.view',['topic_lesson'=>$lessons]);
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
        return view('admin.topic_lesson.edit',['topicLessons'=>$topicLesson,'topics'=>$topics]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topics_lesson $topicLessons)
    {
        $request->validate([
            'topic_id'=>"required",
            'lesson_name'=>"required",
            'duration'=>"required"
        ]);
        $topicLessons->update($request->all());
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
        //
    }
}
