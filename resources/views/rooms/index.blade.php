@extends('layouts.app')
@section('content')
@include('layouts.message')

<h2 class="text-4xl font-bold border-b-4  text-black ">Rooms</h2>
<div class="my-3 text-right">
    <a href="{{route('rooms.create')}}" class="btn btn-primary rounded-lg px-3 py-2">Add Room</a>

</div>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Order</th>
            <th scope="col">Room Category</th>
            <th scope="col">Rate</th>
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
<div id="deletebox" class=" hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class=" flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">
                Are you sure to delete ?
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
<!-- <script>
    $(document).ready(function() {
        $DataTable();
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