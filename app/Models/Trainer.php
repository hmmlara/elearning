<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    public function specialities(){
        return $this->belongsToMany(Speciality::class, 'trainer_specialities');
    }
}
