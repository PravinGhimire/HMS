@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-4xl font-bold border-b-4 text-black ">Room Details</h2>

<div class="my-3 text-right">
    <a href="{{route('roomdetails.create')}}" class="btn btn-primary rounded-lg px-3 py-2">Add Details</a>
</div>

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
            @foreach($roomdetailed as $roomdetails)
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
                <td><div class="btn-group">
                    <a href="{{route('roomdetails.edit',$roomdetails->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a onclick="showDelete('{{$roomdetails->id}}')" class="btn btn-danger cursor-pointer"><i class="fas fa-trash"></i></a>
                    </div></td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
    {{ $roomdetailed->links() }}
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
    new DataTable('#example');
</script>  -->

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