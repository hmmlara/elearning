<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Course::all();
        $js = $all->toJson();
//        dd($js);
        $topics=Topic::all();
//        $from=$topics->firstItem();
//        $to=$topics->lastItem();
        return view('admin.topic.index',['topics'=>$topics,'from'=>1,'courses' => Course::all(),'items'=>$js]);
    }

//    public function addMore()
//    {
//        return view('admin.topic.addMore');
//    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topic.create')->with(['courses' => Course::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'topics_name' => 'required',
            'course_id' => 'required',
            'description' => 'required',
        ]);

//        if(Topic::create($request->except('_token'))){
//            return redirect()->route('topics.index');
//        }
//        dd($request->topics_name);


        if (count($request->topics_name) == count($request->description))
        {
            for($i=0;$i<count($request->topics_name);$i++){
                $course_id = $request->course_id;
                $topics_name = $request->topics_name[$i] ?? '-----';
                $description = $request->description[$i] ?? '-----';

                Topic::create([
                   'course_id' => $course_id,
                    'topics_name' => $topics_name,
                    'description' => $description
                ]);
            }
            return back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $employee = User::find($id);
//        $branch_id = $employee->branch_id;
//        return view('employee.edit',['employee'=>$employee,'branches'=>Branch::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->route('topics.index');
    }
}
