<?php

namespace Database\Seeders;

use App\Models\Trainer;
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
        $trainers = [
            [
                'name' => 'Mr. Leo Backham',
                'email' => 'leo@gmail.com',
                'phone' => '09888888888',
                'education' => 'Master of IT',
                'experience'=> 'more than 5 years',
                'description' => 'knowledge in Java and C#',
            ],
            [
                'name' => 'Dr. William',
                'email' => 'william@gmail.com',
                'phone' => '09182730482',
                'education' => 'Master of Computing',
                'experience'=> 'more than 5 years',
                'description' => 'knowledge in Cloud Computing',
            ],
        ];

        foreach($trainers as $trainer){
            Trainer::create($trainer);
        }
    }
}
