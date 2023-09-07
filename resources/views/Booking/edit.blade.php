@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 my-8">Edit Payment Status</h2>

    <form action="{{ route('booking.update', $booking->id) }}" method="POST" class="my-10">
        @csrf
       

        <div class="mb-4">
            <label for="name" class="block font-semibold text-gray-700">Name</label>
            <input type="text" class="w-full p-2 rounded-lg mt-2 border border-gray-300 focus:outline-none focus:border-blue-500" id="name" name="name" value="{{ $booking->name }}" disabled>
        </div>

        <div class="mb-4">
            <label for="payment_status" class="block font-semibold text-gray-700">Payment Status</label>
            <select class="w-full p-2 rounded-lg mt-2 border border-gray-300 focus:outline-none focus:border-blue-500" id="payment_status" name="payment_status">
                <option value="Pending" {{ $booking->payment_status === 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Received" {{ $booking->payment_status === 'Received' ? 'selected' : '' }}>Received</option>
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary rounded-lg px-4 py-2">Update</button>
            <a href="{{ route('booking.index') }}" class="btn btn-danger text-white rounded-lg px-4 py-2 mx-2">Exit</a>


        </div>
    </form>
</div>
@endsection