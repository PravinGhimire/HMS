@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-4xl font-bold border-b-4 text-black ">Room Details</h2>

<div class="my-3 text-right">
    <a href="{{route('roomdetails.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add Details</a>
</div>
<div class="table-responsive">
<table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Order</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Room_Size</th>
                <th>Bed_Size</th>
                <th>View</th>
                <th>Room Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roomdetails as $roomdetails)
            <tr>
            <tr>
                <td>{{$roomdetails->priority}}</td>
                <td>
                    <div class="h-24 overflow-auto">{{$roomdetails->description}}</div>
                </td>
                <td><img class="w-full" src="{{asset('images/roomdetails/'.$roomdetails->photopath)}}" alt=""></td>
                <td>{{$roomdetails->room_size}}</td>
                <td>{{$roomdetails->bed_size}}</td>
                <td>{{$roomdetails->view}}</td>
                <td>{{$roomdetails->room->room_type}}</td>
                <td>
                    <a href="{{route('roomdetails.edit',$roomdetails->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                    <a onclick="showDelete('{{$roomdetails->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>
            <form action="{{route('roomdetails.delete')}}" method="POST">
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


<!-- <script>
    $(document).ready(function() {
        DataTable({
            columnDefs: [{
                    width: 150,
                    targets: 3
                },
                {
                    width: 350,
                    targets: 2
                }
            ],
        });
    });
</script> -->

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