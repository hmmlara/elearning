<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_trainer extends Model
{
    use HasFactory;
    protected $fillable = ['batch_id', 'trainer_id'];

}