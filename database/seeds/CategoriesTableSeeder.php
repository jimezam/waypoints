<?php

use Illuminate\Database\Seeder;

use App\Category;

// $ php artisan make:seeder CategoriesTableSeeder

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Category #1'
        ]);
        Category::create([
            'name' => 'Category #2'
        ]);
        Category::create([
            'name' => 'Category #3'
        ]);
        Category::create([
            'name' => 'Category #4'
        ]);
        Category::create([
            'name' => 'Category #5'
        ]);
    }
}
