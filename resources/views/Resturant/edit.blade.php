@extends('layouts.app')

@section('content')
    <h2 style="font-size: 2.25rem; font-weight: bold; border-bottom: 4px solid black; padding-bottom: 0.5rem; margin-bottom: 1rem;">Edit Restaurant Item</h2>

    <form action="{{ route('resturant.update', $resturant->id) }}" method="POST" enctype="multipart/form-data" style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        @csrf
        <div class="form-group" style="margin-bottom: 1rem;">
            <label for="priority" style="font-weight: bold;">Priority</label>
            <input type="number" name="priority" class="form-control" value="{{ $resturant->priority }}" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
            <label for="food" style="font-weight: bold;">Food</label>
            <input type="text" name="food" class="form-control" value="{{ $resturant->food }}" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
            <label for="quantity" style="font-weight: bold;">Quantity</label>
            <input type="text" name="quantity" class="form-control" value="{{ $resturant->quantity }}" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
            <label for="rate" style="font-weight: bold;">Rate</label>
            <input type="number" name="rate" class="form-control" value="{{ $resturant->rate }}" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
            <label for="photopath" style="font-weight: bold;">Current Photo</label>
            <div style="margin-bottom: 0.5rem;">
                <img src="{{ asset('images/resturants/' . $resturant->photopath) }}" alt="Food Image" style="width: 100px; height: 100px; object-fit: cover; border-radius: 0.25rem;">
            </div>
            <label for="photopath" style="font-weight: bold;">Change Photo</label>
            <input type="file" name="photopath" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Item</button>
    </form>
@endsection
