<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\Trainer;
use App\Models\TrainerSpeciality;
use Illuminate\Http\Request;

class TrainerSpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $trainers=Trainer::paginate(1);
        $from=$trainers->firstItem();

        //$specialities=Speciality::find(1);
        // dd($specialities->trainers);
        return view('admin.trainerspeciality.index',['trainers'=>$trainers,'from'=>$from]);
      // return view('admin.trainerspeciality.index')
       // var_dump($trainer);
       //var_dump($trainers->specialities());
    //    foreach($trainers->specialities as $speciality)
    //    {
    //         echo $speciality->name;
    //    }
    //    $specialities=Speciality::find(1);
    //    foreach($specialities->trainers as $trainer)
    //    {
    //     echo $trainer->name;
    //    }
    // //    foreach($trainers as $trainer)
    // //    {
    //     echo $trainer->speciality->name;
    //    }
      
    //    $specialities=Speciality::all();
    //    foreach($specialities as $speciality){
    //     echo $speciality->name;
    //    }
       // return view('admin.trainerspeciality.index',['trainers'=>$trainer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
