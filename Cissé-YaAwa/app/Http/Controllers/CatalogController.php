<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\DeliveryZone;
use Inertia\Inertia;
use Illuminate\Database\Eloquent\Model;


class CatalogController extends Controller
{
     function index(Request $request)  {
     $products = Product::where('active', true)
    ->orderBy('name')
    ->get();      
      $categories = Category::orderBy('id')        
      ->get();        
      
        $zones = DeliveryZone::all();
        // var_dump($produits);
        return Inertia::render('Catalog',['produits'=>$products,
                                        'categories'=>$categories,
                                        'deliveryzones'=>$zones,
                                        ]);
     }

     function boutique()  {
     // $products = Product::all() ;
     $products = Product::where('active', true)
    ->orderBy('name')
    ->get();       
      $categories = Category::orderBy('id')        
      ->get();        
              // var_dump($produits);
        return Inertia::render('Boutique',['produits'=>$products,
                                        'categories'=>$categories,
                                        ]);
     }
}

