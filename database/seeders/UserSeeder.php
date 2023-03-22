<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>"Herry",
            'email'=>"herry@gmail.com",
            'password'=>bcrypt('123456')
        ]);
        User::create([
            'name'=>"David",
            'email'=>"david@gmail.com",
            'password'=>bcrypt('123456')
        ]);
        User::create([
            'name'=>"Keith",
            'email'=>"keith@gmail.com",
            'password'=>bcrypt('123456')
        ]);
    }
}
