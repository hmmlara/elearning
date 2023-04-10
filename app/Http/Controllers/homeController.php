<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        // dd($categories);
        $courses = [];
        $index = 0;
        foreach($categories as $category){
            if($category->courses != null){
                $courses[$index] = count($category->courses);
            }else{
                $courses[$index] = 0;
            }
            $index++;
        }

        //$all_cid=DB::table('courses')->get('id');
        // for($i=0;$i<count($all_cid);$i++)
        // {
        // }
        // $bid=DB::table('courses')->join('batches','courses.id','=','batches.course_id')->get('batches.id');
        //     // dd($bid[0]);
        //     $tid=DB::table('course_trainers')->where('course_trainers.batch_id','=',$bid[0]->id)->get('trainer_id');
        //     // dd($tid);
        //     $trainer_name=DB::table('trainers')->where('id',$tid[0]->trainer_id)->get('name');
        //     // dd($trainer_name);



        $select = DB::table('courses')
            ->join('batches', 'courses.id' , '=', 'batches.course_id')
            ->join('course_trainers', 'course_trainers.batch_id' , '=', 'batches.id')
            ->join('trainers', 'course_trainers.trainer_id', '=', 'trainers.id')
            ->select('courses.title', 'courses.hours', 'courses.total_topics', 'trainers.name', 'batches.batch_name', 'courses.feature_img', 'courses.fee')
            ->orderBy('courses.created_at', 'desc')
            ->take(3)
            ->get();
        //dd($all);


        // dd($categories);

        // $all_course = Course::all();
        return view('index', ['categories'=>$categories, 'courses'=>$courses,'selection' => $select]);
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
