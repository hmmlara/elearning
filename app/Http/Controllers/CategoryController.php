<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::paginate(3);
        $from=$category->firstItem();
        return view('admin.category.index',['categories'=>$category,'from'=>$from]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CategoryRequest $category)
    {
        //
        // dd(
        //     $category
        // );
        date_default_timezone_set("Asia/Yangon");
        $date_now=date('Y-m-d H:i:s');
        Category::create([
            'name'=>$category->name,
            'created_at'=>$date_now,
        ]);
        return redirect()->route('categories.index');

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
        $category=Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, CategoryRequest $category)
    {
        //
        date_default_timezone_set("Asia/Yangon");
        $date_now=date('Y-m-d H:i:s');
        $category_update=Category::find($id);
        $category_update->name=$category->input('name');
        $category_update->updated_at=$date_now;
        $category_update->save();
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_delete=Category::find($id);
        $category_delete->delete();
        return redirect()->route('categories.index');
    }
}
