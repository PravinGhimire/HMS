@extends('layouts.app')

@section('content')

<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Edit Payment</h2>
<div class="container mx-auto flex">
    <div class="w-1/4 p-4">
    

        <!-- Display Booking Information -->
        <p class="font-semibold text-gray-700 mb-2">Name:</p>
        <p class="text-gray-600">{{ $booking->name }}</p>

        <p class="font-semibold text-gray-700 mt-4 mb-2">Rate:</p>
        <p class="text-gray-600">{{ $booking->room->rate }}</p>
    </div>

    <div class="w-3/4 p-4">
        <form action="{{ route('booking.update', $booking->id) }}" method="POST" class="my-4">
            @csrf

            <!-- Add/Edit Payment Status -->
            <div class="mb-4">
                <label for="payment_status" class="block font-semibold text-gray-700">Payment Status</label>
                <select class="w-full p-2 rounded-lg mt-2 border border-gray-300 focus:outline-none focus:border-blue-500" id="payment_status" name="payment_status">
                    <option value="Pending" {{ $booking->payment_status === 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Received" {{ $booking->payment_status === 'Received' ? 'selected' : '' }}>Received</option>
                </select>
            </div>
            <!-- ... (other form fields) ... -->

            <div class="mt-4">
                <button type="submit" class="btn btn-primary rounded-lg px-4 py-2">Update</button>
                <a href="{{ route('booking.index') }}" class="btn btn-danger text-white rounded-lg px-4 py-2 mx-2">Exit</a>
            </div>
        </form>
    </div>
</div>
@endsection
