<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_category_id';

    protected $fillable = [
        'product_category_name',
        'product_category_status',
    ];
}
