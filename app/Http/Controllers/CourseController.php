<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
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
        //
        $courses=Course::paginate(2);
        $from=$courses->firstItem();
        $to=$courses->lastItem();
        
        return view('admin.course.index',['courses' => $courses,'from'=>$from]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
            // dd($request->file('feature_image'));

        $data = $request->all();
        
        $file=$request->file('feature_image');
        $name=$request->file('feature_image')->getClientOriginalName();
        $new_name=time().$name;
        $destinationPath=public_path().'/img';

        $data['feature_image'] = $new_name;  

        // date_default_timezone_set("Asia/Yangon");
        // $date_now=date('Y-m-d H:i:s');
        // $request->feature_image=$name;
        // Course::create($request->all());

        if( $file->move($destinationPath,$new_name)){
            Course::create($data);
            return redirect()->route('courses.index');
        }
        
        return back();
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
        $course=Course::find($id);
        return view('admin.course.view',['course'=>$course]);
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
        $course=Course::find($id);
        $categories=Category::all();
        return view('admin.course.edit',['course'=>$course,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Course $course)
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
                'feature_image'=>'nullable|mimes:jpg,jpeg,png,webp|max:200000'
            ]
        );

        $data = $request->all();
        
        if($request->hasFile('feature_image')){
            $file=$request->file('feature_image');
            $name=$request->file('feature_image')->getClientOriginalName();
            $new_name=time().$name;
            $destinationPath=public_path().'/img';

            $data['feature_image'] = $new_name;  

            if( $file->move($destinationPath,$new_name)){
                if($course->update($data))
                {
                    return redirect()->route('courses.index');
                }
            }        
        }

        if($course->update($data))
            return redirect()->route('courses.index');

        // return redirect()->route('courses.index');
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
        $course=Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');

    }
}
