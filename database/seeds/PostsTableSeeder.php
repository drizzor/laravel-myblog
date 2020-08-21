<?php

use App\Category;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $img_w = 350;
        $img_h = 235;

        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'user_id' => rand(1, 4),
                'title' => $faker->words(5, true), // true pour forcer l'envoi d'un string et non un array (par défaut). Evite de faire planter le seed car je souhaite avoir un simple string
                'slug' => $faker->slug,
                'subtitle' => $faker->words(13, true),
                'body' => $faker->sentences(rand(10, 200), true),
                'cover_image' => 'https://source.unsplash.com/' . $img_w . 'x' . $img_h . '/?technology',
                'visits_count' => rand(1, 200)
            ])->categories()->attach([
                Category::pluck('id')->random()
            ]);

            $img_w++;
            $img_h++;
        }
    }
}
