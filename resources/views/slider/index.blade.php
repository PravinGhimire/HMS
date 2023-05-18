@extends('layouts.app')
@section('content')
@include('layouts.message')


<h2 class="text-4xl font-bold border-b-4 text-black">Slider Gallery</h2>

<div class="my-3 text-right">
    <a href="{{route('slider.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add Photo</a>
</div>
<div class="table-responsive">
<table  class="table">
        <thead>
            <tr>
        <th>Order</th>
         <th>Picture</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sliders as $slider)
        <tr>
        <tr>
            <td>{{$slider->priority}}</td>
            <td><img  class="w-24" src="{{asset('images/slider/'.$slider->photopath)}}" alt=""></td>
            <td>
                <a href="{{route('slider.edit',$slider->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                <a onclick="showDelete('{{$slider->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
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
            <form action="{{route('slider.delete')}}" method="POST">
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


<!-- <script>
    $(document).ready(function () {
$('#example').DataTable();
});
</script> -->

<script>
    function showDelete(id)
    {
        $('#deletebox').removeClass('hidden');
        $('#dataid').val(id);
    }
    function hideDelete()
    {
        $('#deletebox').addClass('hidden');
    }
</script>
@endsection