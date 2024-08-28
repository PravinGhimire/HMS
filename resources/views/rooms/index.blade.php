@extends('layouts.app')

@section('content')
@include('layouts.message')

<div class="container mx-5">
    <div class="row">
        <!-- Left side: Create Room Form -->
        <div class="col-md-4">
            <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 mb-6">Create New Room</h2>

            <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
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
                        <option value="Family Room">Family Room</option>
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
    <label for="guests" class="block text-gray-700 text-sm font-bold mb-2">Number of Guests</label>
    <input type="number" name="guests" id="guests" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter number of guests" value="{{ old('guests') }}" required>
    @error('guests')
        <p class="text-red-600 text-sm">* {{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
        <label for="services" class="block text-gray-700 text-sm font-bold mb-2">Services</label>
        <input type="text" class="w-full p-2 rounded-lg shadow appearance-none border leading-tight focus:outline-none focus:shadow-outline" name="services" id="services" placeholder="Enter FontAwesome Icon (e.g., fas fa-wifi)" required>
        @error('services')
        <span class="text-red-500">* {{ $message }}</span>
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

        <!-- Right side: Room Index -->
        <div class="col-md-7">
            <h2 class="text-4xl font-bold border-b-4 text-black">Rooms</h2>
            <!-- <div class="my-3 text-right">
                <a href="{{route('rooms.create')}}" class="btn btn-primary rounded-lg px-3 py-2">Add Room</a>
            </div> -->

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Order</th>
                        <th scope="col">Room Category</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Services</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paginate as $rooms)
                    <tr>
                        <td>{{$rooms->priority}}</td>
                        <td>{{$rooms->room_type}}</td>
                        <td>{{$rooms->rate}}</td>
                        <td>{{$rooms->guests}}</td>
            <td>{{$rooms->services}}</td>
                        <td><img class="w-24" src="{{asset('images/rooms/'.$rooms->photopath)}}" alt=""></td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('rooms.edit',$rooms->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a onclick="showDelete('{{$rooms->id}}')" class="btn btn-danger cursor-pointer"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $paginate->links()}}
            </div>
        </div>
    </div>
</div>

<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">
                Are you sure to delete?
            </p>
            <form action="{{route('rooms.delete')}}" method="POST">
                @csrf
                <input type="hidden" id="dataid" name="dataid" value="">
                <div class="flex mt-10 justify-center">
                    <input type="submit" value="Confirm! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                    <a onclick="hideDelete()" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showDelete(id) {
        $('#deletebox').removeClass('hidden');
        $('#dataid').val(id);
    }

    function hideDelete() {
        $('#deletebox').addClass('hidden');
    }
</script>
@endsection
