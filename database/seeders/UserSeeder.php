<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create(
            [
                "name"=>"Harry",
                "email"=>"harry@gmail.com",
                "password"=>Hash::make('123456')
            ]);
        User::create(
            [
                "name"=>"Bob",
                "email"=>"bob@gmail.com",
                "password"=>Hash::make('123456')
            ]);
        User::create(
            [
                "name"=>"Suzen",
                "email"=>"suzen@gmail.com",
                "password"=>Hash::make('123456')
            ]
            );
    }
}
