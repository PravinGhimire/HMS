@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Add New Restaurant Item</h2>

    <form action="{{ route('resturant.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md mx-auto w-full max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority</label>
            <input type="number" name="priority" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="food" class="block text-gray-700 text-sm font-bold mb-2">Food</label>
            <input type="text" name="food" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
            <input type="text" name="quantity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="rate" class="block text-gray-700 text-sm font-bold mb-2">Rate</label>
            <input type="number" name="rate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="photopath" class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
            <input type="file" name="photopath" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Item</button>
        </div>
    </form>
</div>
@endsection
