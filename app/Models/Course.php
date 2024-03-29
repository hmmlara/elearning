<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['title','description','duration','ojt_duration','hours','total_topics','fee','discount','ojt_duration','learing_outcome','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
