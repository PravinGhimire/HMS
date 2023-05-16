@extends('layouts.app')
@section('content')
@include('layouts.message')


<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Booking Records</h2>


<table id="example" class="display border-spacing-1 ">
    <thead>

        <th>Name</th>
        <th>Email</th>
        <th>Check_in</th>
        <th>Check_out</th>
        <th>Room </th>
        <th>Payment Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($forms as $form)

        <tr>

            <td>{{$form->name}}</td>
            <td>{{$form->email}}</td>
            <td>{{$form->check_in}}</td>
            <td>{{$form->check_out}}</td>
            <td>{{$form->room->room_type}}</td>
            <td><span class="bg-yellow-400 text-white text-m font-medium mr-2 px-2.5 py-1 rounded dark:bg-yellow-400">Pending</span>

            </td>
            <td>
                <a href="" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                <a onclick="showDelete" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>


<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>
            <form action="{{route('gallery.delete')}}" method="POST">
                @csrf
                <input type="hidden" id="dataid" name="dataid" value="">

                <div class="flex mt-10 justify-center">
                    <input type="submit" value="Confirm? Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                    <a onclick="hideDelete()" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

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