<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTrainer extends Model
{
    use HasFactory;

    protected $fillable = ['batch_id','course_id', 'trainer_id'];
}
