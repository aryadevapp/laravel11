<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Psikologi Klinis',
            'slug' => 'psikologi-kalinis',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Psikologi Insdustri',
            'slug' => 'psikologi-industri',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Psikologi Forensik',
            'slug' => 'psikologi-forensik',
            'color' => 'yellow'
        ]);
    }
}
