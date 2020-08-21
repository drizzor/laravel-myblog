<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::create([
            'name' => 'Anna Doe',
            'email' => $faker->unique()->safeEmail,
            'avatar_path' => 'https://avatars.dicebear.com/api/avataaars/Anna.svg?mood[]=happy',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Richard Doe',
            'email' => $faker->unique()->safeEmail,
            'avatar_path' => 'https://avatars.dicebear.com/api/avataaars/Richard.svg?mood[]=happy',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Max Doe',
            'email' => $faker->unique()->safeEmail,
            'avatar_path' => 'https://avatars.dicebear.com/api/avataaars/Max.svg?mood[]=happy',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Steve Doe',
            'email' => $faker->unique()->safeEmail,
            'avatar_path' => 'https://avatars.dicebear.com/api/avataaars/Steve.svg?mood[]=happy',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        // Some lambda Users
        for ($i = 0; $i < 20; $i++) {
            $name = $faker->unique()->name;
            User::create([
                'name' => $name,
                'email' => $faker->unique()->safeEmail,
                'avatar_path' => 'https://avatars.dicebear.com/api/avataaars/' . $name . '.svg',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
