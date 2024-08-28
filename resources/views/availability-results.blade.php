@extends('master')

@section('content')
<div class="container my-5">
<div class="col-md-7 mx-4">
    <h2 class="text-center mb-4 mt-9">Available Rooms </h2>
</div>
    @if($availableRooms->isEmpty())
        <div class="alert alert-danger text-center">
            No rooms available for the selected dates.
        </div>
    @else
        <div class="row">
            @foreach($availableRooms as $room)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/rooms/' . $room->photopath) }}" class="card-img-top" alt="Room Image" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $room->room_type }}</h5>
                            <p><i class="fas fa-users"></i>({{$room->guests}}) Guests</p>
                            <p class="card-text">Rate: Nrs. {{ $room->rate }}</p>
                            <p class="card-text">Amenities: Free Wi-Fi, Cable TV, Air Conditioning</p>
                            @if ($room->isAvailableForBooking())
                                <a href="{{ route('rums', $room->id) }}" class="btn btn-primary">View Details</a>
                            @else
                                <p class="text-danger">Not Available for Selected Dates</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection