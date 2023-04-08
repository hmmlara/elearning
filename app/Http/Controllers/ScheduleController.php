<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleRequest;
use App\Models\Batch;
use App\Models\Schedule;
// use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules = Schedule::paginate(10);
        return view('admin.schedule.index')
                ->with(["schedules" => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $batches = Batch::all();
        return view('admin.schedule.create')
            ->with(["batches" => $batches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $scheduleRequest)
    {
        //
        if(Schedule::create($scheduleRequest->except('_token'))){
            return redirect()->route('schedules.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
        $batches = Batch::all();
        // dd($schedule);
        return view('admin.schedule.edit')
                ->with(["schedule" => $schedule,"batches" => $batches]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScheduleRequest $scheduleRequestequest, Schedule $schedule)
    {
        //
        if($schedule->update($scheduleRequestequest->except(['_token','_method']))){
            return redirect()->route('schedules.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
        if($schedule->delete()){
            return redirect()->route('schedules.index');
        }
    }
}
