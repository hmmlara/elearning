<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTrainer extends Model
{
    use HasFactory;
    public function trainers(){
        return $this->belongsToMany(Trainer::class);
    }
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
    public function batches(){
        return $this->belongsToMany(Batch::class);
    }

}
