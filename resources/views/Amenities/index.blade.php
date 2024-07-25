@extends('layouts.app')

@section('content')
@include('layouts.message')

<div class="container mx-5">
    <div class="row">
        <!-- Left side: Create Amenity Form -->
        <div class="col-md-4">
            <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500 mb-6">{{ isset($amenity) ? 'Edit Amenity' : 'Create Amenity' }}</h2>

            <form action="{{ isset($amenity) ? route('amenities.update', $amenity->id) : route('amenities.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                @if(isset($amenity))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ isset($amenity) ? $amenity->name : old('name') }}" required>
                    @error('name')
                        <p class="text-red-600 text-sm">* {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ isset($amenity) ? $amenity->description : old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-sm">* {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="icon" class="block text-gray-700 text-sm font-bold mb-2">Icon</label>
                    <input type="text" name="icon" id="icon" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ isset($amenity) ? $amenity->icon : old('icon') }}" required>
                    <small class="form-text text-muted">Enter the Font Awesome class for the icon (e.g., fas fa-wifi).</small>
                    @error('icon')
                        <p class="text-red-600 text-sm">* {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="color" class="block text-gray-700 text-sm font-bold mb-2">Icon Color</label>
                    <input type="color" name="color" id="color" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ isset($amenity) ? $amenity->color : '#000000' }}" required>
                    @error('color')
                        <p class="text-red-600 text-sm">* {{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-center mt-4">
                    <input type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" value="{{ isset($amenity) ? 'Update' : 'Add' }}">
                    <a href="{{ route('amenities.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer ml-4">Exit</a>
                </div>
            </form>
        </div>

        <!-- Right side: Amenity Index -->
        <div class="col-md-7">
            <h2 class="text-4xl font-bold border-b-4 text-black">Amenities</h2>

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Order</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($amenities as $amenity)
                    <tr>
                        <td>{{ $amenity->id }}</td>
                        <td>{{ $amenity->name }}</td>
                        <td>{{ $amenity->description }}</td>
                        <td><i class="{{ $amenity->icon }}" ></i></td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('amenities.edit', $amenity->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a onclick="showDelete('{{ $amenity->id }}')" class="btn btn-danger cursor-pointer"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $amenities->links() }}
            </div>
        </div>
    </div>
</div>

<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">
                Are you sure to delete?
            </p>
            <form action="{{ route('amenities.destroy', 'delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" id="dataid" name="dataid" value="">
                <div class="flex mt-10 justify-center">
                    <input type="submit" value="Confirm! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
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
