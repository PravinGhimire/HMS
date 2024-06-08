@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 mb-6">Create New Room</h2>

    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg mx-auto">
        @csrf

        <div class="mb-4">
            <label for="room_type" class="block text-gray-700 text-sm font-bold mb-2">Room Type</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="room_type" id="room_type" required>
                <option value="select">---Select---</option>
                <option value="Single Room">Single Room</option>
                <option value="Deluxe Room">Deluxe Room</option>
                <option value="Double Bed Room">Double Bed Room</option>
                <option value="Suit Room">Suit Room</option>
                <option value="VIP Room">VIP Room</option>
                <option value="Luxurious Room">Luxurious Room</option>
                <option value="Apartment">Apartment</option>
            </select>
            @error('room_type')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rate" class="block text-gray-700 text-sm font-bold mb-2">Rate</label>
            <input type="text" name="rate" id="rate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Rate" value="{{ old('rate') }}" required>
            @error('rate')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="photopath" class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
            <input type="file" name="photopath" id="photopath" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @error('photopath')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority</label>
            <input type="text" name="priority" id="priority" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter priority" required>
            @error('priority')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-center mt-4">
            <input type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" value="Add">
            <a href="{{ route('rooms.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer ml-4">Exit</a>
        </div>
    </form>
</div>
@endsection
