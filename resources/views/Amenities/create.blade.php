@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Amenity</h1>
    <form action="{{ route('amenities.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="icon">Icon:</label>
            <input type="text" class="form-control" id="icon" name="icon" required>
            <small class="form-text text-muted">Enter the Font Awesome class for the icon (e.g., fas fa-wifi).</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
