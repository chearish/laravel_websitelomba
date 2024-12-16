<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Mixed Choir', 'description' => 'Mixed', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Female Choir', 'description' => 'Female','created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Male Choir', 'description' => 'Male','created_at' => now(), 'updated_at' => now()],
        ];

        Category::insert($categories);
    }
}
