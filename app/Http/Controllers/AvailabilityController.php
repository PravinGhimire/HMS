<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rooms;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function checkAvailability(Request $request)
    {
        // Validate the request data
   // Validate the input
   $validated = $request->validate([
    'checkin' => 'required|date|after_or_equal:today',
    'checkout' => 'required|date|after:checkin',
    'guest' => 'required|integer|min:1',
]);

// Fetch available rooms based on the input criteria
$availableRooms = Rooms::where('guests', '>=', $validated['guest'])
    ->whereDoesntHave('bookings', function($query) use ($validated) {
        $query->whereBetween('check_in', [$validated['checkin'], $validated['checkout']])
              ->orWhereBetween('check_out', [$validated['checkin'], $validated['checkout']]);
    })->get();

// Return results to the view
return view('availability-results', compact('availableRooms'));
}
}
