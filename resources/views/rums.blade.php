@include('layouts.message')
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Room Details - New Era</title>
   <link rel="icon" type="image/png" href="images/Fauget Hotel.png">
   <meta name="keywords" content="hotel, room, booking, luxury, comfort">
   <meta name="description" content="Discover the luxurious rooms at New Era with top-notch amenities and features. Book your stay with us.">
   <meta name="author" content="New Era">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- Favicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Fancybox CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!-- FontAwesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Custom Styles -->
   <style>
      .alert-popup {
         display: none;
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background-color: rgba(0, 0, 0, 0.8);
         color: white;
         padding: 20px;
         border-radius: 10px;
         z-index: 9999;
      }

      .alert-content {
         text-align: center;
      }

      .close-btn {
         background-color: transparent;
         border: 1px solid white;
         color: white;
         padding: 5px 10px;
         border-radius: 5px;
         cursor: pointer;
      }

      .carousel-item img {
         height: 400px;
         object-fit: cover;
      }

      .main-layout {
         background-color: #f8f9fa;
      }

      .title h2 {
         margin-top: 20px;
         color: #333;
         font-size: 36px;
         text-transform: uppercase;
      }

      .booking-form {
         background: #ffffff;
         padding: 30px;
         border-radius: 10px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .booking-form h3 {
         margin-bottom: 20px;
         color: #333;
      }

      .form-group label {
         font-weight: bold;
      }

      .default-btn {
         background-color: #007bff;
         color: white;
         border: none;
         padding: 10px 20px;
         border-radius: 5px;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }

      .default-btn:hover {
         background-color: #0056b3;
      }

      .details-section {
         background: #fff;
         padding: 20px;
         border-radius: 10px;
         margin-top: 20px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .details-section h2 {
         margin-bottom: 20px;
      }

      .details-section p {
         margin-bottom: 10px;
      }

      .details-section strong {
         font-weight: bold;
      }

      .overview-container {
         margin-bottom: 40px;
      }

      .overview-row {
         display: flex;
         justify-content: space-between;
         margin-bottom: 10px;
      }

      .overview-item {
         background: #f9f9f9;
         padding: 10px;
         margin: 5px;
         border-radius: 8px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
         flex: 1;
      }

      .overview-item i {
         font-size: 24px;
         color: #007bff;
         margin-right: 10px;
      }

      .overview-item p {
         margin: 0;
         font-size: 16px;
      }

      footer {
         margin-top: 40px;
      }
   </style>
</head>
<!-- Body -->

<body class="main-layout">
   <!-- Header -->
   <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">New Era</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-nav-scroll me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Our Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Restaurant</a>
                        </li>
                    </ul>
                    <!-- User Authentication Links -->
                    @if(auth()->check())
        <a class="text-white text-sm m-1">Welcome, {{ auth()->user()->name }}</a>
        @endif
        <ul>
          @if(!auth()->check())
          <ul class="navbar-nav ms-auto">
            <li><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item">
              <span class="nav-link active">|</span>
            </li>
            <li><a class="nav-link active" href="{{ route('register') }}">Register</a></li>
          </ul>
          @else
          <div class="btn-group">
            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- Add user icon or other indication if necessary -->
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              @if(auth()->user()->role == 'admin')
              <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
              @else
              <li><a class="dropdown-item" href="{{ route('bookingview') }}">View Booking</a></li>
              @endif
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </div>
          @endif
        </ul>
                    <!-- Add your authentication links here -->
                </div>
            </div>
        </nav>
    </header>
   <!-- End Header -->
  
   <div class="container mt-5">
   <div class="row">
      <div class="col-md-7 mx-4">
         <div class="title">
            <h2>{{ $room->room_type }}</h2>
         </div>
      </div>
      <div class="col-md-9">
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- Carousel Items -->
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="{{asset('images/rooms/'.$room->photopath)}}" class="w-100" alt="Room Image">
               </div>
               <div class="carousel-item">
                  <img src="{{asset('images/roomdetails/'.$roomdetail->photopath)}}" class="w-100" alt="Room Detail Image">
               </div>
               <div class="carousel-item">
                  <img src="https://rooms-hotel-kazbegi.booked.net/data/Photos/OriginalPhoto/4972/497240/497240235/Rooms-Hotel-Kazbegi-Exterior.JPEG" class="w-100" alt="Hotel Exterior">
               </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
         <!-- Room Details -->
         <div class="details-section">
            <h2>Description</h2>
            <p class="text-justify">{{$roomdetail->description}}</p>
         </div>
         <!-- Overview -->
         <div class="details-section overview-container">
            <h2>Overview</h2>
            <div class="overview-row">
               <div class="overview-item">
                  <i class="fas fa-ruler-combined"></i>
                  <p><strong>Room size:</strong> {{$roomdetail->room_size}} sq m</p>
               </div>
               <div class="overview-item">
                  <i class="fas fa-users"></i>
                  <p><strong>Occupancy:</strong> Up to 4 adults</p>
               </div>
            </div>
            <div class="overview-row">
               <div class="overview-item">
                  <i class="fas fa-eye"></i>
                  <p><strong>View:</strong> {{$roomdetail->view}}</p>
               </div>
               <div class="overview-item">
                  <i class="fas fa-smoking-ban"></i>
                  <p><strong>Smoking:</strong> No smoking</p>
               </div>
            </div>
            <div class="overview-row">
               <div class="overview-item">
                  <i class="fas fa-utensils"></i>
                  <p><strong>Room service:</strong> Yes</p>
               </div>
               <div class="overview-item">
                  <i class="fas fa-bath"></i>
                  <p><strong>Bathroom:</strong> Ensuite, with shower and bathtub</p>
               </div>
            </div>
            <div class="overview-row">
               <div class="overview-item">
                  <i class="fas fa-wifi"></i>
                  <p><strong>Free Wi-Fi:</strong> Yes</p>
               </div>
               <div class="overview-item">
                  <i class="fas fa-tv"></i>
                  <p><strong>Entertainment:</strong> Flat-screen TV, Cable channels</p>
               </div>
            </div>
         </div>
      </div>

      <!-- Check Availability Section -->
      <div class="col-md-3">
                <div class="details-section booking-form">
                    <h3>Check Availability</h3>
                    <form action="{{ route('booking.checkAvailability') }}" method="POST" id="checkAvailabilityForm">
                    @csrf
                        <div class="form-group">
                            <label for="check_in">Check-in</label>
                            <input type="date" class="form-control" id="check_in" name="check_in" required>
                        </div>
                        <div class="form-group">
                            <label for="check_out">Check-out</label>
                            <input type="date" class="form-control" id="check_out" name="check_out" required>
                        </div>
                        <button type="submit" class="btn default-btn mt-3">Check Availability</button>
                    </form>
                </div>
                @if (session('availability_checked'))
                    <div class="details-section booking-form mt-4">
                        <h3>Book Now</h3>
                        <form id="bookRoomForm" action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                            <input type="hidden" name="check_in" value="{{ session('check_in') }}">
                            <input type="hidden" name="check_out" value="{{ session('check_out') }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                             <div class="form-group">
            <label for="noofpeople">Number of People</label>
            <input type="number" class="form-control" id="noofpeople" name="noofpeople" required>
        </div>
                            <button type="submit" class="btn default-btn mt-3">Book Now</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>

@include('footer')

<script>
  $(document).ready(function() {
    $('#checkAvailabilityForm').submit(function(event) {
        event.preventDefault();

        var checkin = $('#check_in').val();
        var checkout = $('#check_out').val();

        $.ajax({
            type: 'POST',
            url: "{{ route('booking.checkAvailability') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                check_in: checkin,
                check_out: checkout
            },
            success: function(response) {
                if (response.available) {
                    // Room is available, display the popup or take further action
                    $('#availabilityPopup').show();
                } else {
                    // Room is not available, display a message or take other actions
                    alert('Room is not available for the selected dates.');
                }
            },
            error: function(xhr, status, error) {
                // Handle error response here
                console.log('Error checking availability');
                console.log(xhr.responseText);
            }
        });
    });
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script>
    function showBookingForm() {
        // Hide availability popup
        $('#availabilityPopup').hide();

        // Show booking form
        $('#bookingForm').show();
    }

    function closePopup() {
        $('#availabilityPopup').hide();
    }

    $(document).ready(function() {
        $('#checkAvailabilityForm').submit(function(event) {
            event.preventDefault();

            var checkin = $('#check_in').val();
            var checkout = $('#check_out').val();

            $.ajax({
                type: 'POST',
                url: "{{ route('roomAvailability') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    check_in: checkin,
                    check_out: checkout
                },
                success: function(response) {
                    if (response.available) {
                        // Room is available, display the popup
                        $('#availabilityPopup').show();
                    } else {
                        // Room is not available, display a message or take other actions
                        alert('Room is not available for the selected dates.');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error response here
                    console.log('Error checking availability');
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script> -->

</body>

</html>
