<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'food', 'customer_name', 'customer_email', 'customer_phone', 'quantity', 'rate', 'resturant_id', 'status'
    ];

    public function resturant()
    {
        return $this->belongsTo(Resturant::class);
    }
}
