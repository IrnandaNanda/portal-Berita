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
        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Design System',
            'slug' => 'design-system'
        ]);
        Category::create([
            'name' => 'Artificial Intellegent',
            'slug' => 'ai'
        ]);
    }
}
