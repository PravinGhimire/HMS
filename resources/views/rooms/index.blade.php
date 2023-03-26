@extends('layouts.app')
@section('content')
<Script src="https://cdn.tailwindcss.com ">
            </script>
<h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Rooms</h2>
<div class="my-4 text-right">
    <a href="{{route('rooms.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add Room</a>

</div>
<table id="example" class="display">
    <thead>
        <th>Order</th>
        <th>Room Category</th>
        <th>Rate</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>single</td>
            <td>$100</td>
            <td>Edit Delete</td>
        </tr>
       
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
@endsection