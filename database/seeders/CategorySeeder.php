<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

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
        $categories = [
            ['name' => 'Java'],
            ['name' => 'PHP'],
            ['name' => 'Python'],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}

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
