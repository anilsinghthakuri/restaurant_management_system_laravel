<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReceipt extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_id',
        'paid_amount',
        'receipt_date',
        'receipt_payment_mode',
        'receipt_desc',
        'receipt_status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
