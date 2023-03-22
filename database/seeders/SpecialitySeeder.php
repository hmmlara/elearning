<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Speciality;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speciality::create([
            'name' => 'Web Development',
            'parent' => 0
        ]);
        Speciality::create([
            'name' => 'Mobile App Development',
            'parent' => 0
        ]);
        Speciality::create([
            'name' => 'Solution Architect',
            'parent' => 0
        ]);
    }
}