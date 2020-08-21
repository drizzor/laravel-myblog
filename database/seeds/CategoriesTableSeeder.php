<?php

use App\Category;
use Illuminate\Database\Seeder;

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
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => '#ff2d20'
        ]);

        Category::create([
            'name' => 'VUEJS',
            'slug' => 'vuejs',
            'color' => '#41b883'
        ]);

        Category::create([
            'name' => 'Devops',
            'slug' => 'devops',
            'color' => '#0f5cde'
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business',
            'color' => '#ff3f45'
        ]);
    }
}
