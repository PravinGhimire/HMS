<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rooms;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function checkAvailability(Request $request)
    {
        $request->validate([
            'checkin' => 'required|date|after_or_equal:today',
            'checkout' => 'required|date|after:checkin',
        ]);

        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        $availableRooms = Rooms::whereDoesntHave('bookings', function ($query) use ($checkin, $checkout) {
            $query->where(function ($query) use ($checkin, $checkout) {
                $query->where('check_in', '<', $checkout)->where('check_out', '>', $checkin);
            });
        })->get();

        return view('availability', compact('availableRooms', 'checkin', 'checkout'));
    }
}
