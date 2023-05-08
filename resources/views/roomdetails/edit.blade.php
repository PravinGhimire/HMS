@extends('layouts.app')
@section('content')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Create Room Details</h2>

    <form action="{{route('roomdetails.update',$roomdetails->id)}}" method="POST" class="my-10" enctype="multipart/form-data">
        @csrf
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter priority"  value="{{$roomdetails->priority}}" >
    @error('priority')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="{{$roomdetails->description}}">
        @error('description')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror
        <p>Current Image</p>
        <img  class="w-34" src="{{asset('images/roomdetails/'.$roomdetails->photopath)}}" alt="">
    <input type="file" name="photopath" class="mt-5">
    @error('photopath')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="room_size" placeholder="Room_size" value="{{$roomdetails->room_size}}" >
    @error('room_size')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
    <input type="text" class="w-full p-2 rounded-lg mt-2" name="bed_size" placeholder="Bed_size" value="{{$roomdetails->bed_size}}" >
    @error('bed_size')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
    <input type="text" class="w-full p-2 rounded-lg mt-2" name="view" placeholder="View" value="{{$roomdetails->view}}" >
    @error('view')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror

        <div class="mt-2">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
            <a href="{{route('roomdetails.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
        </div>
    </form>

@endsection