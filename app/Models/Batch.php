<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['batch_name', 'course_id', 'start_date', 'end_date'];
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function trainers(){
        return $this->belongsToMany(Trainer::class, 'course_trainers');
    }
    public function schedules(){
        return this->hasMany(Schecule::class);
    }
}
