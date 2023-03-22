<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function category(){
       return $this->belongsTo(category::class);
    }

    public function batches(){
        return $this->hasMany(batch::class);
    }
}