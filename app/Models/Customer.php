<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'customer_name',
        'customer_bank',
        'customer_account_number',
        'customer_mobile',
        'customer_address',
        'customer_desc',
        'customer_status',
    ];
}
