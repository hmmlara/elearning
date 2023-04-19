<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['topic_name','course_id','description'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function topicLessons()
    {
        return $this->hasMany(Topics_lesson::class);
    }
}
