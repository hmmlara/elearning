<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerShowController extends Controller
{
    public function show()
    {
        $trainers=Trainer::all();
        return view('trainers',['trainers'=>$trainers]);
    }
}
