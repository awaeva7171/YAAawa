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
    public function run(): void
    {
        $categories = [
            ['name' => 'Céréales',        'color' => '#b98a38', 'image' => '/images/cereales.svg'],
            ['name' => 'Légumes',         'color' => '#468060', 'image' => '/images/legumes.svg'],
            ['name' => 'Épicerie',        'color' => '#b65c3a', 'image' => '/images/epicerie.svg'],
            ['name' => 'Poisson',         'color' => '#477d87', 'image' => '/images/poisson.svg'],
            ['name' => 'Saveurs locales', 'color' => '#956687', 'image' => '/images/local.svg'],
        ];

        foreach($categories as $categorie){
            Category::create($categorie);
        }
    }
    
}
