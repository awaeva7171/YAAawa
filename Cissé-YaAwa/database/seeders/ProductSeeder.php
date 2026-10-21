<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ids = Category::pluck('id', 'name');
        
        $products = [
            [
                'category_id' => $ids['Céréales'],
                'name' => 'Riz brisé parfumé',
                'origin' => 'Vallée du fleuve',
                'unit' => 'sac de 25 kg',
                'image' => '/images/riz.svg',
                'price' => 17500,
                'sale_price' => null,
                'stock' => 18,
            ],
            [
                'category_id' => $ids['Légumes'],
                'name' => 'Oignons de Potou',
                'origin' => 'Potou',
                'unit' => 'kg',
                'image' => '/images/oignons.svg',
                'price' => 750,
                'sale_price' => 700,
                'stock' => 4,
            ],
            [
                'category_id' => $ids['Céréales'],
                'name' => 'Fonio précuit',
                'origin' => 'Kédougou',
                'unit' => 'sachet de 500 g',
                'image' => '/images/fonio.svg',
                'price' => 2200,
                'sale_price' => 2000,
                'stock' => 12,
            ],
            [
                'category_id' => $ids['Légumes'],
                'name' => 'Gombo frais',
                'origin' => 'Thiès',
                'unit' => 'kg',
                'image' => '/images/gombo.svg',
                'price' => 1200,
                'sale_price' => null,
                'stock' => 0,
            ],
            [
                'category_id' => $ids['Épicerie'],
                'name' => 'Huile d’arachide',
                'origin' => 'Kaolack',
                'unit' => 'bouteille de 2 L',
                'image' => '/images/huile.svg',
                'price' => 4500,
                'sale_price' => 4200,
                'stock' => 20,
            ],
            [
                'category_id' => $ids['Poisson'],
                'name' => 'Thiof',
                'origin' => 'Joal',
                'unit' => 'kg',
                'image' => '/images/thiof.svg',
                'price' => 4500,
                'sale_price' => null,
                'stock' => 8,
            ],
            [
                'category_id' => $ids['Saveurs locales'],
                'name' => 'Bissap séché',
                'origin' => 'Kaolack',
                'unit' => 'sachet de 250 g',
                'image' => '/images/bissap.svg',
                'price' => 1200,
                'sale_price' => null,
                'stock' => 22,
            ],
            [
                'category_id' => $ids['Saveurs locales'],
                'name' => 'Bouye en poudre',
                'origin' => 'Tambacounda',
                'unit' => 'sachet de 500 g',
                'image' => '/images/bouye.svg',
                'price' => 1800,
                'sale_price' => 1600,
                'stock' => 13,
            ],
        ];

         foreach ($products as $product) {
            Product::create($product + ['featured' => true]);
        }
    }
}
