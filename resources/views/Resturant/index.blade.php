@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Restaurant Items</h2>
        <div class="my-3 text-right">
            <a href="{{ route('resturant.create') }}" class="btn btn-primary rounded-lg px-4 py-2">Add New Item</a>
        </div>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Priority</th>
                    <th>Food</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resturants as $resturant)
                    <tr>
                        <td>{{ $resturant->priority }}</td>
                        <td>{{ $resturant->food }}</td>
                        <td>{{ $resturant->quantity }}</td>
                        <td>{{ $resturant->rate }}</td>
                        <td>
                            <img src="{{ asset('images/resturants/' . $resturant->photopath) }}" alt="Food Image" class="w-20 h-20 object-cover">
                        </td>
    <td>
        <div class="btn-group">
    <a href="{{ route('resturant.edit', $resturant->id) }}" class="btn btn-warning rounded-lg px-3 py-2">Edit</a>

    <a onclick="showDelete('{{$resturant->id}}')" class="btn btn-danger cursor-pointer">Delete</a>
                    </div></td>
            

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>
            <form action="{{route('resturant.delete')}}" method="POST">
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
