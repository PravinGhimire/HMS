@extends('layouts.app')

@section('content')
<div class="container mx-5">
        <div class="row">
            <!-- Left side: Create Restaurant Item Form -->
            <div class="col-md-4">
                <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 mb-6">Add New Item</h2>

                <form action="{{ route('resturant.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                    @csrf
                    <div class="mb-4">
                        <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority</label>
                        <input type="number" name="priority" id="priority" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('priority')
                            <p class="text-red-600 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="food" class="block text-gray-700 text-sm font-bold mb-2">Food</label>
                        <input type="text" name="food" id="food" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('food')
                            <p class="text-red-600 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
                        <input type="text" name="quantity" id="quantity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('quantity')
                            <p class="text-red-600 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="rate" class="block text-gray-700 text-sm font-bold mb-2">Rate</label>
                        <input type="number" name="rate" id="rate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('rate')
                            <p class="text-red-600 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="photopath" class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
                        <input type="file" name="photopath" id="photopath" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('photopath')
                            <p class="text-red-600 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Item</button>
                    </div>
                </form>
            </div>

            <!-- Right side: Restaurant Items Index -->
            <div class="col-md-8">
                <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Restaurant Items</h2>
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
                                        <a onclick="showDelete('{{ $resturant->id }}')" class="btn btn-danger cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $paginate->links() }}
                </div>
            </div>
        </div>
    </div>

    <div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm">
        <div class="flex h-full justify-center items-center">
            <div class="bg-white p-10 rounded-lg">
                <p class="font-bold text-2xl">Are you sure you want to delete?</p>
                <form action="{{ route('resturant.delete') }}" method="POST">
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
