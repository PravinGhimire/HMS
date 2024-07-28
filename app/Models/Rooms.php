<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $guarded=[];
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id');
    }

    // Define a method to check if the room is available for booking
    public function isAvailableForBooking()
    {
        // Check if the number of bookings for this room is less than 5
        return $this->bookings()->count() < 5;
    }

    
}
