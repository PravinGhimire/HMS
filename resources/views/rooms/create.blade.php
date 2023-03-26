 @extends('layouts.app')
@section('content')

<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500"> Create New Room</h2>
<form action="{{route('rooms.store')}}" method="POST" class="my-10">
    @csrf
   
    <input type="text" class="w-full p-2 rounded-lg my-2" name="room type" placeholder="Room Type">
    <input type="text" class="w-full p-2 rounded-lg my-2" name="rate" placeholder="Enter Rate">
    <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter priority" >
    <div class="mt-2">
        <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
        <a href="{{route('rooms.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
    </div>

</form>
@endsection
