<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Resturant;
use App\Models\Rooms;
use App\Models\User;
use App\Notifications\BookingCancelled;
use App\Notifications\BookingConfirmed;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Request $request)
    {
        // Retrieve the logged-in user
        $userId = $request->input('id');

        // Fetch booking records for the specific user
        $forms = Booking::where('user_id', $userId)
            ->with('room')
            ->orderBy('created_at', 'desc')
           ->paginate(9);

        return view('booking.show', compact('forms'));
    }
   
    public function userbook()
    {
        $users = User::where('role', 'customer')
            ->select('id', 'name', 'email')
            ->withCount('bookings') // This adds a 'bookings_count' attribute to each user
            ->get();
        // Count user's bookings
        $user = auth()->user();
        $forms = Booking::all();
        $resturants = Resturant::all();

        $pages = Booking::all();
        return view('booking.userbook', compact('users', 'forms','pages','resturants'));
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
                'check_in' => 'required|date|after_or_equal:today',
                'check_out' => 'required|date|after_or_equal:check_in',
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

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);

        // Check if the booking has already been canceled
        if ($booking->status === 'Cancelled') {
            return redirect()->back()->with('error', 'Booking has already been canceled.');
        }

        // Calculate the time difference in minutes
        $timeDifference = now()->diffInMinutes($booking->created_at);

        if ($timeDifference <= 10) {
            // Mark the booking as canceled
            $booking->status = 'Cancelled';
            $booking->save();

            // Send a notification to the user
            $user = auth()->user();
            Notification::send($user, new BookingCancelled($booking));

            return redirect()->back();
        } else {
            // Display error message
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        if ($booking->status === 'Cancelled') {
            return redirect()->back()
                ->with('error', 'This booking has been cancelled so cannot be updated further');
        }
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

        return redirect()->route('booking.show')->with('success', 'Payment updated successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete(Request $request)
    {
        try {
            // Retrieve the booking record by ID
            $booking = Booking::findOrFail($request->dataid);
    
            // Check if the booking can be deleted
            if ($booking->status === 'Cancelled' || $booking->payment_status === 'Received') {
                // Delete the booking record from the database
                $booking->delete();
    
                // Redirect back with a success message
                return redirect()->back()->with('success', 'Booking Record Deleted Successfully');
            } else {
                // Redirect back with an error message if the booking cannot be deleted
                return redirect()->back()->with('error', 'Booking cannot be deleted. Ensure it is either cancelled or the payment status is received.');
            }
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the delete operation
            return redirect()->back()->with('error', 'An error occurred while deleting the booking record.');
        }
    }

    // Add checkAvailability method
    public function checkAvailability(Request $request)
    {
        // Validate the request
        $request->validate([
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        // Get the check-in and check-out dates
        $check_in = $request->input('check_in');
        $check_out = $request->input('check_out');

        // Fetch the room ID from the request
        $room_id = $request->input('room_id');

        // Check if the room is available during the specified period
        $available = !Booking::where('room_id', $room_id)
            ->where(function ($query) use ($check_in, $check_out) {
                $query->whereBetween('check_in', [$check_in, $check_out])
                      ->orWhereBetween('check_out', [$check_in, $check_out])
                      ->orWhereRaw('? BETWEEN check_in AND check_out', [$check_in])
                      ->orWhereRaw('? BETWEEN check_in AND check_out', [$check_out]);
            })
            ->exists();

        if ($available) {
            return redirect()->back()->with([
                'availability_checked' => true,
                'check_in' => $check_in,
                'check_out' => $check_out,
                'success' => 'The room is available for the selected dates.'
            ]);
        } else {
            return redirect()->back()->with('error', 'The room is not available for the selected dates.');
        }
    }
}
