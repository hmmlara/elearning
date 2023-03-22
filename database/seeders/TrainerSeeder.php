<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;
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
            "name"=>'Mr.Leo Backham',
            'email'=>'leo@gmail.com',
            'phone'=>'09438909876',
            'education'=>'Master of IT',
            'experience'=>'more than 5 years',
            'description'=>'knowledge in Java and C#'
        ]);
        Trainer::create([
            "name"=>'Dr.William',
            'email'=>'william@gmail.com',
            'phone'=>'09789689098',
            'education'=>'Master of Computing',
            'experience'=>'more than 5 years',
            'description'=>'knowledge in Cloud Computing'
        ]);
    }
}
