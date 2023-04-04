<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'duration', 'hours', 'total_topics', 'fee', 'discount', 'ojt_duration', 'learning_outcome', 'category_id', 'feature_img'];
    public function category(){
       return $this->belongsTo(category::class);
    }

    public function batches(){
        return $this->hasMany(batch::class);
    }
}