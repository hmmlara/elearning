<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Java'
        ]);
        Category::create([
            'name' => 'PHP'
        ]);
        Category::create([
            'name' => 'Python'
        ]);
    }
}