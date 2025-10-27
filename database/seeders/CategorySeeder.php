<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'UI/UX']);
        Category::create(['name' => 'Web Development']);
        Category::create(['name' => 'Deep Learning & AI']);
        Category::create(['name' => 'Mobile App Development']);
    }
}
