<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'description', 'duration', 'hours', 'total_topics', 'fee', 'discount', 'ojt_duration', 'learning_outcome', 'feature_img'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function schdules(){
        return $this->hasMany(Schedule::class);
    }

    public function batches(){
        return $this->hasMany(Batch::class);
    }

    public function topics(){
        return $this->hasMany(Topic::class);
    }
    public function trainers(){
        return $this->belongsToMany(Trainer::class, 'course_trainers');
    }
}
