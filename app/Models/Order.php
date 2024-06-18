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
        'quantity', 
        'customer_name', 
        'customer_phone', 
        
        'status'
    ];

    public function resturant()
    {
        return $this->belongsTo(Resturant::class);
    }
}
