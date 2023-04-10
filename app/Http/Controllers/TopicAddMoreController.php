<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicAddMoreController extends Controller
{
    public function addMore()
    {
        return view('admin.topic.addMore');
    }
    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.topics_name' => 'required',
            'addmore.*.course_id' => 'required',
            'addmore.*.description' => 'required',
        ]);

        foreach ($request->addmore as $key => $value) {
            Topic::create($value);
        }

        return back()->with('success', 'Record Created Successfully.');
    }
}
