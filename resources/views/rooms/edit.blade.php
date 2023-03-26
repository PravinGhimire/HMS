@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500"> Edit Rooms</h2>
<form action="{{route('rooms.update',$roomss->id)}}"  method="post" class="my-10">
    @csrf
    <input type="text" class="w-full p-2 rounded-lg my-2" name="room_type" placeholder="Room Type" value="{{$roomss->room_type}}">
@error('room_type')
<span  class="text-red-500 -mt-4">*{{$message}}</span>
@enderror
<input type="text" class="w-full p-2 rounded-lg my-2" name="rate" placeholder="Enter Rate" value="{{$roomss->rate}}">
@error('rate')
<span  class="text-red-500 -mt-4">*{{$message}}</span>
@enderror
    <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter priority" value="{{$roomss->priority}}">
    @error('priority')
    <span  class="text-red-500 -mt-4">*{{$message}}</span>
    @enderror
    <div class="mt-2">
        <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
        <a href="{{route('rooms.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
    </div>

</form>
@endsection