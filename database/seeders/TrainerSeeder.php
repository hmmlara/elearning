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
            'name'=>'Willim',
            'email'=>'willim@gmail.com',
            'phone'=>'0987654321',
            'education'=>'B.C.Sc',
            'experience'=>'more than 4 years',
            'description'=>'knowledge in Java and C#'
        ]);

        Trainer::create([
            'name'=>'Marry',
            'email'=>'marry@gmail.com',
            'phone'=>'0987654321',
            'education'=>'Master of IT',
            'experience'=>'more than 7 years',
            'description'=>'knowledge in PHP and Python'
        ]);

        Trainer::create([
            'name'=>'Rosy',
            'email'=>'rosy@gmail.com',
            'phone'=>'0987654321',
            'education'=>'Master of Computer Science',
            'experience'=>'more than 4 years',
            'description'=>'knowledge in Laravel'
        ]);
    }
}
