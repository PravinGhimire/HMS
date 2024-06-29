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
                    <img src="{{ asset('images/slider/' . $slider->photopath) }}" alt="Banner Image" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animate__animated animate__fadeInDown">Welcome to New Era Hotel</h5>
                        <p class="animate__animated animate__fadeInUp">Experience luxury and comfort like never before.</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Check Availability Section -->
<section class="check-availability my-5 py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Check Room Availability</h2>
                <form action="{{ route('checkAvailability') }}" method="POST" id="checkAvailabilityForm" class="bg-white p-4 rounded shadow">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="checkin" class="form-label">Check-In Date</label>
                            <input type="date" class="form-control" id="checkin" name="checkin" required>
                        </div>
                        <div class="col-md-4">
                            <label for="checkout" class="form-label">Check-Out Date</label>
                            <input type="date" class="form-control" id="checkout" name="checkout" required>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Check Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about my-5" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="titlepage animate__animated animate__fadeInLeft">
                    <h2>About Us</h2>
                    <p>Welcome to our hotel New Era! Our hotel is located in a quiet and peaceful neighborhood, providing a perfect place to rest and relax after a busy day of activities. We offer a range of comfortable rooms to suit your needs, including single, double, and twin rooms, all of which are equipped with essential amenities such as air conditioning, TV, and free Wi-Fi.</p>
                    <a class="btn btn-primary" href="/about" role="button">Read More</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img animate__animated animate__fadeInRight">
                    <figure><img src="{{ asset('images/about.png') }}" class="img-fluid" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Rooms Section -->
<section class="our_room my-5" id="room">
    <div class="container">
        <div class="titlepage text-center animate__animated animate__fadeInUp">
            <h2>Our Rooms</h2>
            <p>Experience the epitome of comfort and luxury in our exquisitely designed rooms. Whether you're here for business or leisure, our rooms offer the perfect blend of elegance and convenience to ensure your stay is unforgettable.</p>
        </div>
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="room animate__animated animate__zoomIn">
                        <div class="room_img">
                            <figure><img src="{{ asset('images/rooms/' . $room->photopath) }}" class="img-fluid" alt="#" /></figure>
                        </div>
                        <div class="bed_room text-center">
                            <h3>{{ $room->room_type }}</h3>
                            <p>Rate: Nrs. {{ $room->rate }}</p>
                            <div class="amenities mt-3 mb-2">
                                <p><i class="fas fa-wifi"></i> Free Wi-Fi &nbsp; <i class="fas fa-tv"></i> Cable TV &nbsp; <i class="fas fa-snowflake"></i> Air Conditioning</p>
                            </div>
                            <a class="book_btn btn btn-success" href="{{ route('rums', $room->id) }}">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Restaurant Section -->
<section class="resturant my-5" id="resturant">
    <div class="container">
        <div class="titlepage text-center animate__animated animate__fadeInUp">
            <h2>Our Menu</h2>
        </div>
        <div class="row">
            @foreach($resturants as $resturant)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="menu-item animate__animated animate__zoomIn">
                        <div class="menu-content">
                            <figure><img src="{{ asset('images/resturants/' . $resturant->photopath) }}" alt="Food Image" class="img-fluid"></figure>
                            <h3>Food: {{ $resturant->food }}</h3>
                            <h3>Quantity: {{ $resturant->quantity }}</h3>
                            <h3>Rate: Nrs. {{ $resturant->rate }}</h3>
                            <a href="{{ route('order.create', $resturant->id) }}" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Add custom CSS for better styling -->
<style>
    .banner_main {
        position: relative;
    }

    .carousel-caption h5, .carousel-caption p {
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .carousel-caption .btn {
        background-color: #007bff;
        border: none;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
       
    }

    .check-availability {
        background: #f7f7f7;
        padding: 50px 0;
    }

    .check-availability .form-label {
        font-weight: bold;
    }

    .titlepage h2 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .titlepage p {
        font-size: 1.1rem;
        color: #6c757d;
    }

    .room, .menu-item {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .room:hover, .menu-item:hover {
        transform: translateY(-10px);
    }

    .bed_room h3 {
        font-size: 1.25rem;
        margin-top: 15px;
    }

    .bed_room p {
        color: #6c757d;
    }

    .bed_room .amenities {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .bed_room .book_btn {
        margin-top: 10px;
        background-color: #28a745;
        border: none;
    }

    .menu-content h3 {
        font-size: 1.25rem;
        margin: 10px 0;
    }

    .menu-content .btn {
        background-color: #007bff;
        border: none;
    }

    .our_room .titlepage, .resturant .titlepage {
        margin-bottom: 50px;
    }

    .titlepage h2 {
        font-size: 2.5rem;
    }
</style>

<!-- Add smooth scroll script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll('a[href^="#"]');
        for (const link of links) {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute("href")).scrollIntoView({
                    behavior: "smooth"
                });
            });
        }
    });
</script>

@endsection
