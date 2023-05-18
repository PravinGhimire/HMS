@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-4xl font-bold border-b-4 text-black">Users</h2>

<div class="my-3 text-right">
    <a href="{{route('user.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add User</a>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{route('user.edit',$user->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                    <a onclick="showDelete('{{$user->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
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
            <form action="{{route('user.delete')}}" method="POST">
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