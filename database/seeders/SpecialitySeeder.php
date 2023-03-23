<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name'=>'Web Developer',
            'parent'=>0
        ]);
        Speciality::create([
            'name'=>'Mobile App Developent',
            'parent'=>0
        ]);
        Speciality::create([
            'name'=>'Solution Architect',
            'parent'=>0
        ]);
    }
}
