<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rooms;
use App\Models\User;
use App\Notifications\BookingCancelled;
use App\Notifications\BookingConfirmed;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Rooms::all();
        $forms = Booking::with('room')->orderBy('created_at', 'desc')->paginate(6);

        return view('booking.index', compact('rooms', 'forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        if (auth()->check()) {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'check_in' => 'required',
                'check_out' => 'required',
                'noofpeople' => 'required',
                'room_id' => 'required',
            ]);

            $data['status'] = 'Booked';
            $data['user_id'] = auth()->user()->id; // Use auth()->user() to get the authenticated user
            $booking = Booking::create($data);
            $user = auth()->user();
            Notification::send($user, new BookingConfirmed($booking));

            return redirect()->back()->with('Success', 'Room Booked Successfully')
                ->with('booking_completed', 1);
        } else {
            return redirect()->route('login')->with('success', 'You need to log in to make a booking.');
        }
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
        //yo time  if rw else or content thpeko if ko vitraw ko chaina haina thapeko
        $timeDifference = now()->diffInMinutes($forms->created_at);
        if ($timeDifference <= 10) {

            $forms->status = 'Cancelled';
            $forms->save();
            $user = auth()->user();
            Notification::send($user, new BookingCancelled($forms));

            return redirect()->back();
        } else {
            // Display error message
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $forms = Booking::all();
      
        return view('booking.edit', compact('booking', 'forms'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            // Add validation rules for other fields as needed...
            'payment_status' => 'required|in:Pending,Received',
        ]);

        // Update the payment status
        $booking->payment_status = $request->input('payment_status');
        $booking->save();

        return redirect()->route('booking.index')->with('success', 'Booking updated successfully');
    }
    /**
     * Update the specified resource in storage.
     */

    public function delete(Request $request)
    {
        $forms = Booking::find($request->dataid);

        if ($forms->status === 'Cancelled' || $forms->payment_status === 'Received') {
            $forms->delete();
            return redirect()->back()->with('success', 'Booking Record Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Booking cannot be deleted. Ensure it is either cancelled or the payment status is received.');
        }
    }
}
