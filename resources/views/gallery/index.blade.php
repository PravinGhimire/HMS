@extends('layouts.app')
@section('content')
@include('layouts.message')


<h2 class="text-4xl font-bold border-b-4 text-black">Gallery</h2>

<div class="my-3 text-right">
    <a href="{{route('gallery.create')}}" class="btn btn-primary rounded-lg px-3 py-2">Add Photo</a>
</div>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Order</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <tr>
            
                <td>{{$gallery->priority}}</td>
                <td><img class="w-24" src="{{asset('images/gallery/'.$gallery->photopath)}}" alt=""></td>
                <td>
                <div class="btn-group">
                    <a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a onclick="showDelete('{{$gallery->id}}')" class="btn btn-danger cursor-pointer"><i class="fas fa-trash"></i></a>

                </div>
                </td>
                </tr>
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
                    <a onclick="hideDelete()" class="btn btn-danger text-white rounded-lg px-4 py-2 mx-2">Exit</a>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- <script>
    $(document).ready(function() {
        $('#example').DataTable();
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