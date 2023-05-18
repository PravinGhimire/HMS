<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rooms;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $rooms = Rooms::all();
        $forms = Booking::with('room')->get();

        return view('booking.index', compact('rooms', 'forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'noofpeople' => 'required',
            'room_id' => 'required',
        ]);
        Booking::create($data);
        return redirect()->back()->with('success', 'Room Booked Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function cancel(Request $request, Booking $forms)
    {
        // if ($request->user()->id !== $forms->user_id) {
        //     abort(403, 'Unauthorized');
        // }

        // Update the booking status to "cancelled"
        if ($forms->status === 'cancelled') {
            return redirect()->back()->with('error', 'This booking has already been cancelled.');
        }
    
        // Update the booking status to "cancelled"
        $forms->status = 'cancelled';
        $forms->save();
    
        // Redirect the user to a confirmation page or display a success message
        return redirect()->back()->with('success', 'Booking has been cancelled successfully.');
    }
    public function delete(Request $request)
    {
        $forms = Booking::find($request->dataid);
        $forms->delete();
        return redirect(route('booking.index'))->with('success', 'Booked data deleted');
    }
}
