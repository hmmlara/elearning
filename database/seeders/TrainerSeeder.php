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
        Trainer::create([
            'name'=>'Mr. Leo Backham',
            'email'=>'leo@gmail.com',
            'phone'=>'0977654534',
            'education'=>'Master of IT',
            'experience'=>'more than 5 years',
            'description'=>'Knowleder in Java and C#'
        ]);
        Trainer::create([
            'name'=>'Mr. William',
            'email'=>'william@gmail.com',
            'phone'=>'09454231525',
            'education'=>'Master of Computing',
            'experience'=>'more than 6 years',
            'description'=>'Knowleder in Cloud Computing'
        ]);
    }
}
