<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Category::factory()->createMany([
            ['name' => 'Soul'],
            ['name' => 'Ambient'],
            ['name' => 'Pop'],
            ['name' => 'Rap'],
            ['name' => 'Funk'],
            ['name' => 'Rock'],
            ['name' => 'Reggae / Dub'],
            ['name' => 'Techno'],
            ['name' => 'Electro'],
        ]);
    }
}
