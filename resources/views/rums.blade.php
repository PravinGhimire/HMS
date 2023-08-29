@include('layouts.message')
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>New Era</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- style css -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
</style>
</head>
<!-- body -->

<body class="main-layout">
   <!-- header -->
   @include('header')
   <!-- end header inner -->
   <!-- end header -->
   <div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2>Our Rooms</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-2">
      <div class="col-7 ">
         <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

               <div class="carousel-item active">
                  <img src="{{asset('images/rooms/'.$room->photopath)}}" class=" w-100" alt="...">
               </div>

               <div class="carousel-item">
                  <img src="{{asset('images/roomdetails/'.$roomdetail->photopath)}}" class=" w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="https://rooms-hotel-kazbegi.booked.net/data/Photos/OriginalPhoto/4972/497240/497240235/Rooms-Hotel-Kazbegi-Exterior.JPEG" class=" w-100" alt="...">
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>


         <div>
            <h2 class="text-xl m-1">Description</h2>
            <p class="m-2 text-black  overflow-hidden text-justify">{{$roomdetail->description}} </p>
         </div>

         <div>
            <h2 class="text-xl m-1">Overview</h2>
            <div class="col-lg-6 m-2">
               <p><strong class="color-black">Room size:</strong> {{$roomdetail->room_size}} sq m</p>
               <p><strong class="color-black">Occupancy:</strong> Up to 4 adulds</p>
               <p><strong class="color-black">View:</strong> {{$roomdetail->view}} </p>
               <p><strong class="color-black">Smoking:</strong> No smoking</p>
               <p><strong class="color-black">Bed size:</strong>{{$roomdetail->bed_size}} </p>
               <p><strong class="color-black">Room service:</strong> Yes</p>
            </div>
         </div>

      </div>
      <div class="col-4">
         <!-- <div class="shadow-2-strong card-registration ">
     <div class=" p-3 p-md-5"> -->

         <div class="booking-form">
            <h3 class=" items-center">Booking Sheet </h3>


            <form action="{{ route('booking.store') }}" method="POST" >
               @csrf
               @auth <!-- Check if the user is authenticated -->
               <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
               @endauth <!-- End of authenticated user check -->

               <div class="row align-items-center">
                   <!-- If the user is not authenticated -->
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Your Name">
                        <i class='bx bx-user'></i>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="Your Email">
                        <i class='bx bx-mail-send'></i>
                     </div>
                  </div>
                 <!-- End of guest user check -->

                  <div class="col-lg-6">
                     <div class="form-group">
                        <label>Check in</label>
                        <div class="input-group date">
                           <input id="datetimepicker" type="date" class="form-control" name="check_in">
                           <span class="input-group-addon"></span>
                        </div>
                        <i class='bx bxs-calendar'></i>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label>Check Out</label>
                        <div class="input-group">
                           <input id="datetimepicker-check" type="date" class="form-control" name="check_out">
                           <span class="input-group-addon"></span>
                        </div>
                        <i class='bx bxs-calendar'></i>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label>Numbers of Persons</label>
                        <select class="form-control" name="noofpeople">
                           <option>01</option>
                           <option>02</option>
                           <option>03</option>
                           <option>04</option>
                           <option>05</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label> Room Type</label>
                        <select class="form-control" name="room_id">
                           <option value="{{$room->id}}">{{$room->room_type}}</option>

                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label> Room Rate</label>
                        <select class="form-control" name="room_id">
                           <option value="{{$room->id}}">{{$room->rate}}</option>

                        </select>
                     </div>
                  </div> 
                  <input type="hidden" name="booking_completed" id="bookingCompleted" value="1"> <!-- Hidden field -->

                  <div class="col-lg-12 col-md-12">
                     @auth <!-- If the user is authenticated -->
                     <button type="submit" class="default-btn p-2">Reserve Now</button>
                     @endauth <!-- End of authenticated user check -->
                     @guest <!-- If the user is not authenticated -->
                     <button type="button" class="default-btn p-2" onclick="showGuestAlert()">Reserve Now</button>
                     @endguest <!-- End of guest user check -->
                  </div>
               </div>
            </form>
         </div>
      </div>

   </div>
   <div class="alert-popup" id="alertPopup">
    <div class="alert-content">
        <p>Please Login or register for the reservation</p>
        <button class="close-btn" onclick="hideAlert()">Close</button>
    </div>
</div>

   </div>


   <!--  footer -->
   <footer>
      @include('footer')
   </footer>
   <!-- end footer -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script>
function showGuestAlert() {
    var alertPopup = document.getElementById('alertPopup');
    alertPopup.style.display = 'block';
}

function hideAlert() {
    var alertPopup = document.getElementById('alertPopup');
    alertPopup.style.display = 'none';
}
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingCompleted = "{{ session('booking_completed') }}";
        
        if (bookingCompleted) {
            alert("Booking completed successfully!");
        }
    });
</script>





</body>


</html>