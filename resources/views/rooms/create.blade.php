 @extends('layouts.app')
@section('content')

<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500"> Create New Room</h2>
<form action="{{route('rooms.store')}}" method="POST" class="my-10" enctype="multipart/form-data">
    @csrf
   
    <select class="w-full p-2 rounded-lg mt-2" name="room type">
          <option value="select">---Select---</option>
            <option value="Single Room">Single Room</option>
            <option value="Deluxe Room">Deluxe Room</option>
            <option value="Double Bed Room">Double Bed Room</option>
            <option value="Suit Room">Suit Room</option>
            <option value="VIP Room">VIP Room</option>
            <option value="Luxurious Room">Luxurious Room</option>
            <option value="Apartment">Apartment</option>
        </select>
    @error('room type')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
    <input type="text" class="w-full p-2 rounded-lg my-2" name="rate" placeholder="Enter Rate"  value="{{old('rate')}}">
    @error('rate')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
    <input type="file" name="photopath" class="mt-5">
    @error('photopath')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror

    <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter priority" >
    @error('priority')
        <p class="text-red-600 text-sm">* {{$message}}</p>
    @enderror
    <div class="mt-2">
        <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer" value="Add">
        <a href="{{route('rooms.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
    </div>

</form>
@endsection
