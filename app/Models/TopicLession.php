<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicLession extends Model
{
    use HasFactory;

    public function topic(){
        return this->belongTo(Topic::class);
    }
}
