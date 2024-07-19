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
  /* Popup container */
.alert-popup {
    position: fixed;
    top: 0;
    margin-left: 30%;
    margin-right: 20%;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    display: none; /* Hidden by default */
}

/* Popup content */
.alert-content {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    width: 90%;
    max-width: 500px;
    position: relative;
}

/* Close button */
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ff0000;
    color: #fff;
    border: none;
    border-radius: 50%;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 16px;
    z-index: 1;
}

.close-btn:hover {
    background: #cc0000;
}

/* Button container */
.btn-container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 20px; /* Space above the button */
}

/* Default button styles */
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
/* Check Availability Form */
.availability-form {
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0);
    border: 2px solid black; /* Add border with blue color */
    margin-top: 20px;
    position: relative; /* Ensure it's correctly positioned */
    z-index: 10; /* Ensure it appears above other content */
}

/* Check Availability Section */
.booking-form {
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 2px solid #007bff; /* Blue border for emphasis */
    margin-top: 20px;
}

/* Additional styling */
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
   
        @include('header')
    
   <!-- End Header -->
  
   <div class="container mt-5">
      <div class="row">
         <div class="col-md-7 mx-4">
            <div class="title">
               <h2>{{ $room->room_type }}</h2>
            </div>
         </div>
         <div class="col-md-9">
            <!-- Carousel -->
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
                     <img src="{{ asset('images/rooms/'.$room->photopath) }}" class="w-100" alt="Room Image">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('images/roomdetails/'.$roomdetail->photopath) }}" class="w-100" alt="Room Detail Image">
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
               <p class="text-justify">{{ $roomdetail->description }}</p>
            </div>
            <!-- Overview -->
            <div class="details-section overview-container">
               <h2>Overview</h2>
               <div class="overview-row">
                  <div class="overview-item">
                     <i class="fas fa-ruler-combined"></i>
                     <p><strong>Room size:</strong> {{ $roomdetail->room_size }} sq m</p>
                  </div>
                  <div class="overview-item">
                     <i class="fas fa-users"></i>
                     <p><strong>Occupancy:</strong> Up to 4 adults</p>
                  </div>
               </div>
               <div class="overview-row">
                  <div class="overview-item">
                     <i class="fas fa-eye"></i>
                     <p><strong>View:</strong> {{ $roomdetail->view }}</p>
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
         
        <!-- Check Availability Section -->
<div class="col-md-3">
    <div class="availability-form">
        <h3>Check Availability</h3>
        <form id="checkAvailabilityForm" method="POST" action="{{ route('booking.checkAvailability') }}">
            @csrf
            <div class="form-group">
                <label for="check_in">Check In:</label>
                <input type="date" id="check_in" name="check_in" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="check_out">Check Out:</label>
                <input type="date" id="check_out" name="check_out" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Check Availability</button>
        </form>
    </div>
</div>

        </div>
    </div>
   <!-- Booking Form Popup -->
<div id="availabilityPopup" class="alert-popup">
    <div class="alert-content">
        <button class="close-btn" onclick="closePopup()">&times;</button>
        <h3>Book Now</h3>
        <form id="bookRoomForm" action="{{ route('booking.store') }}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value="{{ $room->id }}">
            <input type="hidden" name="check_in" id="hiddenCheckIn" value="">
            <input type="hidden" name="check_out" id="hiddenCheckOut" value="">
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
            <div class="btn-container">
                <button type="submit" class="btn default-btn btn-primary">Book Now</button>
                <!-- Close button inside the form container -->
            </div>
        </form>
    </div>
</div>


   </div>

   <!-- Footer -->
   @include('footer')

   <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9n5B2vL3Fw0nD/f2FvCAfFChyC6aFiGSPzP5M8+2w7eh8DOzS8" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-pbGrmVYo6/2zH2OH23DP1oF5x70yGgtZtLh5Wg0FvAc3M7UfhzO4UwI0jOO4fpF4" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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
                        $('#hiddenCheckIn').val(checkin);
                        $('#hiddenCheckOut').val(checkout);
                        $('#availabilityPopup').show();
                    } else {
                        alert('Room is not available for the selected dates.');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error checking availability');
                    console.log(xhr.responseText);
                }
            });
        });

        $('#bookRoomForm').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: "{{ route('booking.store') }}",
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        $('#availabilityPopup').hide();
                        $('#checkAvailabilityForm')[0].reset();
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error making booking');
                    console.log(xhr.responseText);
                }
            });
        });

        // Close popup function
        $('#availabilityPopup').on('click', '.close-btn', function() {
            $('#availabilityPopup').hide();
        });

        // Prevent click event propagation to avoid closing popup when clicking inside it
        $('#availabilityPopup').on('click', '.alert-content', function(event) {
            event.stopPropagation();
        });
    });
</script>

</body>
</html>