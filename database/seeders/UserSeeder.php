<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            "name"=>"Harry",
            "email"=>"harry@gmail.com",
            "password"=>Hash::make('123456'),
            
        ]);
        User::create([
            "name"=>"Potter",
            "email"=>"potter@gmail.com",
            "password"=>Hash::make('123456'),
            
        ]);
        User::create([
            "name"=>"David",
            "email"=>"david@gmail.com",
            "password"=>Hash::make('123456'),
            
        ]);
    }
}
