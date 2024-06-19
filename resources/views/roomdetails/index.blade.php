@extends('layouts.app')
@section('content')

@include('layouts.message')

<div class="flex">
    <!-- Form Section -->
    <div class="w-1/3 p-4 border-r"> <!-- Changed width from 1/2 to 1/3 -->
        <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 mb-6">Create Details</h2>
        <form action="{{ route('roomdetails.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md w-full">
            @csrf
            <div class="mb-4">
                <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority</label>
                <input type="text" name="priority" class="w-full p-2 rounded-lg mt-2" placeholder="Enter priority">
                @error('priority')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="room_id" class="block text-gray-700 text-sm font-bold mb-2">Room Type</label>
                <select name="room_id" class="w-full p-2 rounded-lg mt-2">
                    @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->room_type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <input type="text" name="description" class="w-full p-2 rounded-lg mt-2" placeholder="Description" value="{{ old('description') }}">
                @error('description')
                <span class="text-red-500 -mt-4">* {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="photopath" class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
                <input type="file" name="photopath" class="mt-2">
                @error('photopath')
                <span class="text-red-500 -mt-4">* {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="room_size" class="block text-gray-700 text-sm font-bold mb-2">Room Size</label>
                <input type="text" name="room_size" class="w-full p-2 rounded-lg mt-2" placeholder="Room Size" value="{{ old('room_size') }}">
                @error('room_size')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="bed_size" class="block text-gray-700 text-sm font-bold mb-2">Bed Size</label>
                <input type="text" name="bed_size" class="w-full p-2 rounded-lg mt-2" placeholder="Bed Size" value="{{ old('bed_size') }}">
                @error('bed_size')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="view" class="block text-gray-700 text-sm font-bold mb-2">View</label>
                <input type="text" name="view" class="w-full p-2 rounded-lg mt-2" placeholder="View" value="{{ old('view') }}">
                @error('view')
                <p class="text-red-600 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div class="mt-4">
                <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
                <a href="{{ route('roomdetails.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
            </div>
        </form>
    </div>

    <!-- Table Section -->
    <div class="w-2/3 p-4"> <!-- Changed width from 1/2 to 2/3 -->
        <h2 class="text-4xl font-bold border-b-4 text-black mb-6">Room Details</h2>
        <!-- <div class="my-3 text-right">
            <a href="{{ route('roomdetails.create') }}" class="btn btn-primary rounded-lg px-3 py-2">Add Details</a>
        </div> -->
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Room Size</th>
                    <th>Bed Size</th>
                    <th>View</th>
                    <th>Room Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roomdetailed as $roomdetails)
                <tr>
                    <td>{{ $roomdetails->priority }}</td>
                    <td>
                        <div class="h-24 overflow-auto">{{ $roomdetails->description }}</div>
                    </td>
                    <td><img class="w-full" src="{{ asset('images/roomdetails/' . $roomdetails->photopath) }}" alt=""></td>
                    <td>{{ $roomdetails->room_size }}</td>
                    <td>{{ $roomdetails->bed_size }}</td>
                    <td>{{ $roomdetails->view }}</td>
                    <td>{{ $roomdetails->room->room_type }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('roomdetails.edit', $roomdetails->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a onclick="showDelete('{{ $roomdetails->id }}')" class="btn btn-danger cursor-pointer"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $roomdetailed->links() }}
        </div>
    </div>
</div>

<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>
            <form action="{{ route('roomdetails.delete') }}" method="POST">
                @csrf
                <input type="hidden" id="dataid" name="dataid" value="">
                <div class="flex mt-10 justify-center">
                    <input type="submit" value="Yes! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
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
