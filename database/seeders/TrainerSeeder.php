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
        Trainer::create(
            [
                'name'=>'Mr. Leo',
                'email'=>'leo@gmail.com',
                'phone'=>'09456321789',
                'education'=>'Master of IT',
                'experience'=>'more than 5 years',
                'description'=>'knowledge in Java and C#'
            ]
            );
        Trainer::create(
            [
                'name'=>'Mr. Willian',
                'email'=>'willian@gmail.com',
                'phone'=>'09456321765',
                'education'=>'Master of Computing',
                'experience'=>'more than 5 years',                    
                'description'=>'knowledge in Cloud Computing'
            ]
            );
    }
}
