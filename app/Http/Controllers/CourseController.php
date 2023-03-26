<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(3);
        $from = $courses->firstItem();
        $to = $courses->lastItem();
        return view('admin.course.index', ['courses' => $courses, 'from' => $from]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.course.create', ['categories' => $categories]);
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
            'title' => "required",
            'category_id' => "required",
            'description' => "required",
            'duration' => "required",
            'ojt_duration' => "required",
            'total_topics' => "required",
            'hours' => "required",
            'fee' => "required",
            'discount' => "required",
            'learning_outcome' => "required",
        ]);
        Course::create($request->all());
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
        $courses = Course::find($id);
        return view('admin.course.view', ['course' => $courses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {    
        $categories = Category::all();
        return view('admin.course.edit', ['course' => $course, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => "required",
            'category_id' => "required",
            'description' => "required",
            'duration' => "required",
            'ojt_duration' => "required",
            'total_topics' => "required",
            'hours' => "required",
            'fee' => "required",
            'discount' => "required",
            'learning_outcome' => "required",
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index');
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
