<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    public function batches(){
        return $this->belongsToMany(Batch::class, 'course_trainers');
    }
}