<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specialities=Speciality::paginate(2);

        return view('admin.speciality.index',['specialities' => $specialities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $specialities=Speciality::all();
        return view('admin.speciality.create',['specialities'=>$specialities]);
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
                'name'=>'required',
                'parent'=>'required',
            ]
            );
        Speciality::create($request->all());
        return redirect()->route('specialities.index');

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
        $speciality=Speciality::find($id);
        return view('admin.speciality.view',['speciality'=>$speciality]);
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
        $speciality=Speciality::find($id);
        $parents=Speciality::all();
        // dd($parents);
        return view('admin.speciality.edit',['speciality'=>$speciality,'parents'=>$parents]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speciality $speciality)
    {
        //
        $request->validate(
            [
                'name'=>'required',
                'parent'=>'required'
            ]
            );
        $speciality->update($request->all());
        return redirect()->route('specialities.index');
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
        $speciality=Speciality::find($id);
        $speciality->delete();
        return redirect()->route('specialities.index');
    }
}
