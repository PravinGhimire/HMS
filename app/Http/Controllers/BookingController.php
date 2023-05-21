<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rooms;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data['status'] = 'Booked';
        $data['user_id'] = Auth::id();
        // $users = new Booking();

        // Assign the user_id based on the authenticated user
        // $users->user_id = Auth::id();

        // Assign other validated data to booking attributes
        // ...

        // $users->save();
        Booking::create($data);
        return redirect(route('bookingview'))->with('success', 'Room Booked Successfully');
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
    public function cancel($id)
    {
        $forms = Booking::findOrFail($id);

        $forms->status = 'Cancelled';
        $forms->save();

        return redirect()->back()->with('success', 'Booking Cancelled Successfully');
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

    public function delete(Request $request)
    {
        $forms = Booking::find($request->dataid);
        if ($forms->status === 'Cancelled') {
            $forms->delete();
            return redirect()->back()->with('success', 'Booking Record Deleted Successfully');
        } else {
            return redirect()->back()->with('success', 'Cannot delete the booking record. It is not canceled by the user.');
        }
    }
}
