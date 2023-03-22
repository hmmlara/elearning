<?php

namespace Database\Seeders;

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
        User::create([
           'name' => 'Aom Kham Phaung', 
           'email' => 'akhamphaung@gmail.com',
           'password' => Hash::make('123456')
        ]); 
        User::create([
            'name' => 'Phaung', 
            'email' => 'phaung@gmail.com',
            'password' => Hash::make('123456')
         ]); 
         User::create([
            'name' => 'Aom Kham', 
            'email' => 'akham@gmail.com',
            'password' => Hash::make('123456')
         ]); 
    }
}