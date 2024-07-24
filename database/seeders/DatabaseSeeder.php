<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ? add manualy data (without factory, then need define all field)
        // $manualUser = User::create([
        //     'name' => 'Galang Arya Tama',
        //     'username' => 'arya',
        //     'email' => 'arya@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Psikologi Klinis',
        //     'slug' => 'psikologi-klinis'
        // ]);

        // Post::create([
        //     'title' => 'Magejya ipskol',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'magejya-ipskol',
        //     'body' => 'When I was in medical school, neither addiction psychiatry nor addiction medicine existed. Dr. David Smith and a small group of pioneers changed all that.'
        // ]);

        // ? add data with factory
        // Post::factory(100)->recycle([
        //     Category::factory(3)->create(),
        //     $manualUser,
        //     User::factory(5)->create()
        // ])->create();

        // ? for call class seeder
        $this->call([
            CategorySeeder::class,
            UserSeeder::class
        ]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
