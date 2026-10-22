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
     function index()  {
     $products = Product::all() ;       
            
     
      $categories = Category::orderBy('id')        
      ->get();        
      
        $zones = DeliveryZone::all();
        // var_dump($produits);
        return Inertia::render('Welcome',['produits'=>$products,
                                        'categories'=>$categories,
                                        'deliveryzones'=>$zones]);
     }
}
