@extends('master')

@section('content')
<!-- Banner Section -->
<section class="banner_main" id="home">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            @foreach($sliders as $slider)
                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></button>
            @endforeach
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('images/slider/' . $slider->photopath) }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to New Era Hotel</h5>
                        <p>Experience luxury and comfort like never before.</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- About Section -->
<div class="about" id="about">
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="titlepage">
                    <h2>About Us</h2>
                    <p>Welcome to our hotel New Era! Our hotel is located in a quiet and peaceful neighborhood, providing a perfect place to rest and relax after a busy day of activities. We offer a range of comfortable rooms to suit your needs, including single, double, and twin rooms, all of which are equipped with essential amenities such as air conditioning, TV, and free Wi-Fi.</p>
                    <a class="btn btn-primary" href="about.php" role="button">Read More</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="{{ asset('images/about.png') }}" class="img-fluid" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Rooms Section -->
<div class="our_room" id="room">
    <div class="container my-5">
        <div class="titlepage text-center">
            <h2>Our Rooms</h2>
            <p>Experience the epitome of comfort and luxury in our exquisitely designed rooms. Whether you're here for business or leisure, our rooms offer the perfect blend of elegance and convenience to ensure your stay is unforgettable.</p>
        </div>
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('images/rooms/' . $room->photopath) }}" class="img-fluid" alt="#" /></figure>
                        </div>
                        <div class="bed_room text-center">
                            <h3>{{ $room->room_type }}</h3>
                            <p>Rate: Nrs. {{ $room->rate }}</p>

                            <div class="amenities mt-3 mb-2">
                                <p><i class="fas fa-wifi"></i> Free Wi-Fi &nbsp; <i class="fas fa-tv"></i> Cable TV &nbsp; <i class="fas fa-snowflake"></i> Air Conditioning</p>
                            </div>
                            @if($room->isAvailableForBooking())
                                <a class="book_btn" href="{{ route('rums', $room->id) }}">Book Now</a>
                            @else
                                <p>Not Available</p>
                            @endif                       
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Restaurant Section -->
<div class="resturant" id="resturant">
            <div class="our_menu">
                <div class="container my-5">
                    <div class="titlepage text-center">
                        <h2>Our Menu</h2>
                    </div>
                    <div class="row">
                        <!-- Loop through your restaurants data and display menu items -->
                        @foreach($resturants as $resturant)
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="menu-item">
                                <div class="menu-content">
                                    <figure><img src="{{ asset('images/resturants/' . $resturant->photopath) }}" alt="Food Image"></figure>
                                    <h3>Food: {{ $resturant->food }}</h3>
                                    <h3>Quantity: {{ $resturant->quantity }}</h3>
                                    <h3>Rate: Nrs. {{ $resturant->rate }}</h3>
                                    <a href="{{ route('order.create', $resturant->id) }}" class="btn btn-primary">
                                        Order Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    

<!-- Gallery Section -->
<div class="gallery" id="gallery">
    <div class="container my-5">
        <div class="titlepage text-center">
            <h2>Gallery</h2>
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
                <div class="col-md-3 mb-4">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('images/gallery/' . $gallery->photopath) }}" class="img-fluid" alt="#" /></figure>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="contact mb-5">
    <div class="container">
        <div class="titlepage text-center mb-4">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('feedback.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone_number" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" name="message" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 contact-info text-center mt-3">
                <h2><i class="fas fa-map-marker-alt"></i></h2>
                <h4>Nawalpur, Nepal</h4>
                <h2><i class="fas fa-phone"></i></h2>
                <h4>+977 9800000000</h4>
                <h2><i class="fas fa-envelope"></i></h2>
                <h4>halka@gmail.com</h4>
            </div>
        </div>
    </div>
</div>
@endsection
