<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table='trainers';
    protected $fillable =[
        'name',
        'email',
        'phone',
        'education',
        'experience',
        'description',
        'trainer_photo'
    ];
    use HasFactory;
}
