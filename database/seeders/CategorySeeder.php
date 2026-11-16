<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'title' => 'Conseil financier',
                'slug' => Str::slug('Conseil financier'),
                'description' => '',
            ],
            [
                'title' => 'Strategie d\'investissement',
                'slug' => Str::slug('Strategie d\'investissement'),
                'description' => '',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
