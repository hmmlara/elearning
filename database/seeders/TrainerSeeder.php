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
            'name' => 'Aung Aung',
            'email' => 'aung@gmail.com',
            'phone' => '0938383838',
            'education' => 'ME(IT)',
            'working_experience' => '10 years in IT fields',
            'description' => 'Knowledge in JAVA and C++'
        ]);
        Trainer::create([
            'name' => 'Kyaw Swar',
            'email' => 'kyawswar@gmail.com',
            'phone' => '0938383838',
            'education' => 'PhD(IT)',
            'working_experience' => '14 years in IT fields',
            'description' => 'Knowledge in JAVA and PHP'
        ]);

    }
}
