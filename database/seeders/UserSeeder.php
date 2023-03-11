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
        User::create([
            "name"=>"Joeset",
            "email"=>"joe@gmail.com",
            "password"=>Hash::make('123456')
        ]);

        User::create([
            "name"=>"Scarlet",
            "email"=>"let@gmail.com",
            "password"=>Hash::make('123456')
        ]);
    }
}
