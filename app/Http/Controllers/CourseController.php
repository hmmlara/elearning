<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::paginate(3);
        // dd($courses);
        $from=$courses->firstItem();
        // $to=$courses->lastItem();
        // echo $from . ','.$to;
        return view('admin.course.index',['courses'=>$courses ,'from'=>$from]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.course.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
                'category_id'=>'required',
                'duration'=>'required',
                'ojt_duration'=>'required',
                'total_topics'=>'required',
                'hours'=>'required',
                'fee'=>'required',
                'discount'=>'required',
                'learning_outcome'=>'required',
                'feature_image'=>'required|mimes:jpg,jpeg,png|max:200000'

            ]
            );
            // dd($request);
            // dd($request->file('feature_image'));
        $file=$request->file('feature_image');
        $name=$request->file('feature_image')->getClientOriginalName();
        $new_name=time().$name;
        $destinationPath=public_path().'/img';
        $file->move($destinationPath,$new_name);

        // date_default_timezone_set("Asia/Yangon");
        // $date_now=date('Y-m-d H:i:s');
        // $request->feature_image=$name;
        // Course::create($request->all());
        Course::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'category_id'=>$request->category_id,
                'duration'=>$request->duration,
                'ojt_duration'=>$request->ojt_duration,
                'total_topics'=>$request->total_topics,
                'hours'=>$request->hours,
                'fee'=>$request->fee,
                'discount'=>$request->discount,
                'learning_outcome'=>$request->learning_outcome,
                'feature_image'=>$new_name
        ]);
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
