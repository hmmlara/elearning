<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainerRequest;
use App\Models\Trainer;
use Illuminate\Http\Request;
// use Intervention\Image\Image;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers=Trainer::paginate(3);
        return view('admin.trainer.index',['trainers'=>$trainers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainerRequest $request,Trainer $trainer)
    {
        // $request->validate([
        //     "name"=>'required',
        //     "email"=>'required',
        //     "phone"=>'required|min:9',
        //     "education"=>'required',
        //     "experience"=>'required',
        //     "description"=>'required',
        //     "trainer_photo"=> 'required|max:200000'
        // ]);
            $file=$request->trainer_photo;
            $photo_name=$request->trainer_photo->getClientOriginalName();
            $new_name=time().$photo_name;
            $destination_path=public_path().'/img';
            $file->move($destination_path,$new_name);


           Trainer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'education'=>$request->education,
            'experience'=>$request->experience,
            'description'=>$request->description,
            'trainer_photo'=>$new_name
           ]);

            return redirect()->route('trainers.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
          return view('admin.trainer.view',['trainer'=>$trainer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
            return view('admin.trainer.edit',['trainer'=>$trainer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrainerRequest $request,Trainer $trainer)
    {

        $data = $request->all();

        // dd($request->file('trainer_photo'));



        if($request->hasFile('trainer_photo'))
        {
            $file=$request->file('trainer_photo');
            $photo_name=$request->trainer_photo->getClientOriginalName();
            $new_name=time().$photo_name;
            $destination_path=public_path().'/img';
            $data['trainer_photo'] = $new_name;
            // resize image
            // $img = Image::make($file->path());
            // $img->resize(100,100,function($const){
            //     $const->aspectRatio();
            // })->save($destination_path,'/',$data['trainer_photo']);



            if($file->move($destination_path,$new_name)){
                if($trainer->update($data)){
                    return redirect()->route('trainers.index');
                }
            }

        }

        $trainer->update($data);

        return redirect()->route('trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route('trainers.index');
    }
}
