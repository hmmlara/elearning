<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    
    // protected $table = 'specilities';
    public function trainers(){
        return $this->belongsToMany(Trainer::class, 'trainer_specialities');
    }
}
