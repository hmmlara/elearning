<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\Trainer;
use App\Models\TrainerSpeciality;
use Database\Seeders\TrainerSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        
        return view('admin.trainerspeciality.index',['trainers'=>$trainers,'from'=>$from]);
    //   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $trainer=Trainer::all();
        $speciality=Speciality::all();
        return view('admin.trainerspeciality.create',['trainers'=>$trainer,'specialities'=>$speciality]);
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
            'trainer_id'=>'required',
            'speciality_id'=>'required',
        ]);
        $trainer_id=$request->input('trainer_id');
        $selected_specialities = $request->input('speciality_id', []);
        $getspecialities=DB::table('trainer_specialities')->where('trainer_id',$trainer_id)->pluck('speciality_id')->toArray();
        for($i=0;$i<count($selected_specialities);$i++)
            {
                $value=$selected_specialities[$i];
                if(!(in_array($value, $getspecialities ))){
                    DB::table('trainer_specialities')->insert( [
                        'trainer_id'=>$trainer_id,
                        'speciality_id'=>$selected_specialities[$i],
                        ] );
                }
            }

            
       return redirect()->route('trainer_speciality.index');
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
        $trainer=Trainer::find($id);
        return view('admin.trainerspeciality.view',['trainer'=>$trainer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainer_name=DB::table('trainers')->where('id',$id)->get();
        $specialities=Speciality::all();

        
        $getspecialities=DB::table('trainer_specialities')
                            ->join('specialities','trainer_specialities.speciality_id','=','specialities.id')
                            ->where('trainer_id',$id)
                            ->get();
        return view('admin.trainerspeciality.edit',['used_speciality'=>$getspecialities,'trainer_name'=>$trainer_name[0],'allspeciality'=>$specialities]);
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
    $data=Trainer::find($id);
      

    $data->specialities()->detach();

    $trainer_id=$id;
    $selected_specialities = $request->input('speciality_id', []);
    $getspecialities=DB::table('trainer_specialities')->where('trainer_id',$trainer_id)->pluck('speciality_id')->toArray();
    for($i=0;$i<count($selected_specialities);$i++)
        {
            $value=$selected_specialities[$i];
            if(!(in_array($value, $getspecialities ))){
                DB::table('trainer_specialities')->insert( [
                    'trainer_id'=>$trainer_id,
                    'speciality_id'=>$selected_specialities[$i],
                    ] );
            }
        }
        return redirect()->route('trainer_speciality.index');
    
}
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $request=TrainerSpeciality::find($id);
       
        // DB::table('trainer_specialities')
        //     ->where('trainer_id', '=', $id)
        //     ->delete();

        // dd($id);
        // $request->delete();
        // dd($request);
        TrainerSpeciality::where('trainer_id', $id)->delete();

        return redirect()->route('trainer_speciality.index');
    }

}