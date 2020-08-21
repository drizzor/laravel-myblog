<?php

use App\Post;
use App\Comment;
use App\User;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Comment::create([
                'post_id' => Post::pluck('id')->random(),
                'user_id' => User::pluck('id')->random(),
                'title' => $faker->sentences(1, true),
                'body' => $faker->sentences(rand(2, 20), true)
            ]);
        }
    }
}
