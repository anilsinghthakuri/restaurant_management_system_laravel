<?php

namespace App\Models;

use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_category_id',
        'product_name',
        'product_price',
        'product_discount',
        'product_unit',
        'product_status',
    ];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id','product_category_id');
    }
}
