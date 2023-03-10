<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::create([
            'name'=>'Java Web Development'
        ]);

        Category::create([
            'name'=>'Web Development PHP'
        ]);

        Category::create([
            'name'=>'Flutter'
        ]);

        Category::create([
            'name'=>'PHP and Laravel'
        ]);
    }
}
