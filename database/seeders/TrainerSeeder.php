<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Trainer::create([
            "name"=>"Mr.Leo Backham",
            "email"=>"leo@gmail.com",
            "phone"=>"098939392",
            "education"=>"Master of IT",
            "experience"=>"more than 5 years",
            "description"=>"knowledge in Java and C#"
        ]);
        Trainer::create([
            "name"=>"Mr.Willan",
            "email"=>"will@gmail.com",
            "phone"=>"098938292",
            "education"=>"Master of IT",
            "experience"=>"more than 5 years",
            "description"=>"knowledge in Java and PHP"
        ]);
        Trainer::create([
            "name"=>"Mrs.Rose",
            "email"=>"rose@gmail.com",
            "phone"=>"098939392",
            "education"=>"Master of IT",
            "experience"=>"more than 5 years",
            "description"=>"knowledge in Laravel and C#"
        ]);
    }
}
