@extends('layouts.app')

@section('content')
@include('layouts.message')

<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 mb-6">Edit Room</h2>

<form action="{{ route('rooms.update', $rooms->id) }}" method="post" class="my-10" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="room_type" class="block text-gray-700 text-sm font-bold mb-2">Room Type</label>
        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="room_type" id="room_type" required>
            <option value="Single Room" {{ $rooms->room_type == 'Single Room' ? 'selected' : '' }}>Single Room</option>
            <option value="Deluxe Room" {{ $rooms->room_type == 'Deluxe Room' ? 'selected' : '' }}>Deluxe Room</option>
            <option value="Double Bed Room" {{ $rooms->room_type == 'Double Bed Room' ? 'selected' : '' }}>Double Bed Room</option>
            <option value="Suit Room" {{ $rooms->room_type == 'Suit Room' ? 'selected' : '' }}>Suit Room</option>
            <option value="VIP Room" {{ $rooms->room_type == 'VIP Room' ? 'selected' : '' }}>VIP Room</option>
            <option value="Luxurious Room" {{ $rooms->room_type == 'Luxurious Room' ? 'selected' : '' }}>Luxurious Room</option>
            <option value="Apartment" {{ $rooms->room_type == 'Apartment' ? 'selected' : '' }}>Apartment</option>
            <option value="Family Room" {{ $rooms->room_type == 'Family Room' ? 'selected' : '' }}>Family Room</option>
        </select>
        @error('room_type')
        <span class="text-red-500">* {{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="rate" class="block text-gray-700 text-sm font-bold mb-2">Rate</label>
        <input type="text" class="w-full p-2 rounded-lg shadow appearance-none border leading-tight focus:outline-none focus:shadow-outline" name="rate" id="rate" placeholder="Enter Rate" value="{{ $rooms->rate }}" required>
        @error('rate')
        <span class="text-red-500">* {{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="guests" class="block text-gray-700 text-sm font-bold mb-2">Guests</label>
        <input type="number" class="w-full p-2 rounded-lg shadow appearance-none border leading-tight focus:outline-none focus:shadow-outline" name="guests" id="guests" placeholder="Enter Number of Guests" value="{{ $rooms->guests }}" required>
        @error('guests')
        <span class="text-red-500">* {{ $message }}</span>
        @enderror
    </div>

   
    <div class="mb-4">
        <label for="photopath" class="block text-gray-700 text-sm font-bold mb-2">Current Image</label>
        <img class="w-34 mb-2" src="{{ asset('images/rooms/' . $rooms->photopath) }}" alt="">
        <input type="file" name="photopath" id="photopath" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('photopath')
        <span class="text-red-500">* {{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority</label>
        <input type="text" class="w-full p-2 rounded-lg shadow appearance-none border leading-tight focus:outline-none focus:shadow-outline" name="priority" id="priority" placeholder="Enter Priority" value="{{ $rooms->priority }}" required>
        @error('priority')
        <span class="text-red-500">* {{ $message }}</span>
        @enderror
    </div>

    <div class="flex items-center justify-center mt-4">
        <input type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" value="Update Room">
        <a href="{{ route('rooms.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer ml-4">Exit</a>
    </div>
</form>
@endsection
