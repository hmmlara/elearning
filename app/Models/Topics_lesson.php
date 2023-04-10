<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics_lesson extends Model
{
    use HasFactory;
    protected $fillable=['topic_id','lesson_name','duration'];
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
