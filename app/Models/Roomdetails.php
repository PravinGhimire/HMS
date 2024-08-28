<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomdetails extends Model
{
    use HasFactory;
    protected $guarded=[];
  
// Roomdetails.php

public function amenities()
{
    return $this->belongsToMany(Amenity::class);
}
    function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
