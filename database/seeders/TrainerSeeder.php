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
            'name'=>'Mr. Leo Backham',
            'email'=>'leo@gmail.com',
            'phone'=>'098754623',
            'education'=>'Master of IT',
            'experience'=>'more than 5 years',
            'description'=>'knowledge in Java and C#',
        ]);
        Trainer::create([
            'name'=>'Dr. Willam',
            'email'=>'willam@gmail.com',
            'phone'=>'09845632',
            'education'=>'Master of computing',
            'experience'=>'more than 5 years',
            'description'=>'knowledge in cloud computing',
        ]);
    }
}
