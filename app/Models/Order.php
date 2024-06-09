<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'resturant_id', 
        'food', 
        'customer_name', 
        'customer_email', 
        'customer_phone', 
        'customer_address', 
        'quantity'
    ];

    public function resturant()
    {
        return $this->belongsTo(Resturant::class);
    }
}
