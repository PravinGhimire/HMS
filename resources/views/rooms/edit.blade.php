@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500"> Edit Rooms</h2>
<form action="{{ route('rooms.update', $rooms->id) }}" method="post" class="my-10" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="room_type" id="room_type" required>
        <option value="select">---Select---</option>
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
    <span class="text-red-500 -mt-4">*{{ $message }}</span>
    @enderror

    <input type="text" class="w-full p-2 rounded-lg my-2" name="rate" placeholder="Enter Rate" value="{{ $rooms->rate }}">
    @error('rate')
    <span class="text-red-500 -mt-4">*{{ $message }}</span>
    @enderror

    <p>Current Image</p>
    <img class="w-34" src="{{ asset('images/rooms/' . $rooms->photopath) }}" alt="">
    <input type="file" name="photopath" class="mt-5">
    @error('photopath')
    <p class="text-red-600 text-sm">* {{ $message }}</p>
    @enderror

    <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter priority" value="{{ $rooms->priority }}">
    @error('priority')
    <span class="text-red-500 -mt-4">*{{ $message }}</span>
    @enderror

    <div class="mt-2">
        <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer" value="Update Rooms">
        <a href="{{ route('rooms.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
    </div>
</form>
@endsection
