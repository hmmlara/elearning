<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Mime\Crypto\DkimSigner;

class Category extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->hasMany(Course::class);
  
    }
}
