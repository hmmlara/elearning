<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\CourseTrainer;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batches = Batch::paginate(2);
        return view('admin.batch.index', ['batches' => $batches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::all();
        $trainers = Trainer::all();

        return view('admin.batch.create', ['courses' => $courses, 'trainers' => $trainers]);
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
        $request->validate([
            'batch_name' => 'required',
            'course_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'trainer_id' => 'required'
        ]);
        // dd($request->all());

        Batch::create([
            'batch_name' => $request->batch_name,
            'course_id' => $request->course_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        $batch_id = Batch::where('batch_name', $request->batch_name)->get('id');
        CourseTrainer::create([
            'trainer_id' => $request->trainer_id,
            'course_id' => $request->course_id,
            'batch_id' => $batch_id[0]['id']
        ]);
        // dd($batch_id);

        return redirect()->route('batch.index');

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
        $batch = Batch::find($id);
        return view('admin.batch.view', ['batch'=> $batch]);
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
        $batch = Batch::find($id);
        $courses = Course::all();
        return view('admin.batch.edit', ['batch' => $batch, 'courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        //
        $request->validate([
            'batch_name' => 'required',
            'course_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $batch->update($request->all());
        return redirect()->route('batch.index');
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
        $batch = Batch::find($id);
        $batch->delete();
        return redirect()->route('batch.index');
    }
}
