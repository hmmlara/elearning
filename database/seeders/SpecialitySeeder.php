<?php

namespace Database\Seeders;

use App\Models\Speciality;
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
        //
        $specialities = [
            [
                'name' => 'Web Development',
                'parent' => 0,
            ],
            [
                'name' => 'Mobile App Development',
                'parent' => 0,
            ],
            [
                'name' => 'Solution Architect',
                'parent' => 0,
            ],
        ];

        foreach($specialities as $specialty){
            Speciality::create($specialty);
        }

    }
}
