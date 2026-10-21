<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['name',
                        'description',
                        'origin',
                        'unit',
                        'image',
                        'price',
                        'sale_price',
                        'version',
                        'stock',
                        'featured',
                        'active', 
                        'category_id'
                        ];
    
    public function category() :BelongsTo{
        return $this->belongsto(Category::class);
    }

}
