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
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Tweaks for older IEs-->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<!-- body -->

<body class="main-layout">

   <!-- header -->
   <header>
      @include('header')
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->

   <section class="banner_main" id="#">

      <div id="demo" class="carousel slide" data-bs-ride="carousel">

         <!-- Indicators/dots -->
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
         </div>

         <!-- The slideshow/carousel -->
         <div class="carousel-inner">
            @foreach($sliders->take(1) as $slider)
            <div class="carousel-item active">
               <img src="{{asset('images/slider/'.$slider->photopath)}}" alt="" class="">
            </div>
            @endforeach
            @foreach($sliders->skip(1) as $slider)
            <div class="carousel-item">
               <img src="{{asset('images/slider/'.$slider->photopath)}}" alt="" class="">
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

   <!-- end banner -->
   <!-- about -->
   <div class="about" id="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>About Us</h2>
                  <p>Welcome to our hotel New Era! Our hotel is located in a quiet and peaceful neighborhood, providing
                     a perfect place to rest and relax after a busy day of activities. We offer a range of comfortable
                     rooms to suit your needs, including single, double, and twin rooms, all of which
                     are equipped with essential amenities such as air conditioning, TV, and free Wi-Fi.. </p>
                  <a class="btn btn-primary" href="about.php" role="button">Read More</a>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="images/about.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- our_room -->

   <div class="our_room" id="room">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Rooms </h2>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($rooms as $room)
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="{{asset('images/rooms/'.$room->photopath)}}" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>{{$room->room_type}}</h3>
                     <p>
                     <h4>${{$room->rate}}</h4>
                     </p>
                     <div class="rating">
                        @for ($i = 1; $i <= 5; $i++) @if ($i <=$room->rating)
                           <i class="fas fa-star "></i>
                           @else
                           <i class="far fa-star"></i>
                           @endif
                           @endfor
                     </div>
                     <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                  </div>
               </div>
            </div>
            @endforeach
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room2.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Deluxe Room</h3>
                     <h4>$100 </h4>
                     <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room3.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Superior Room</h3>
                     <h4>$110</h4>
                     <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room4.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Single Room</h3>
                     <h4>$50 </h4>
                     <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room5.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Suite Room</h3>
                     <h4>$30 </h4>
                     <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room6.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Triple Room</h3>
                     <h4>$60</h4>
                     <a class="btn btn-primary btn-lg" onclick="" role="button">View Room</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end our_room -->
   <!-- gallery -->
   <div class="gallery" id="gallery">
      <div class="container ">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>gallery</h2>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-md-3 ">
               <div class="gallery_img">
                  <figure><img src="{{asset('images/gallery/'.$gallery->photopath)}} " alt="#" /></figure>
               </div>
            </div>
            @endforeach

         </div>
      </div>
   </div>
   <!-- end gallery -->

   <!--  contact -->
   <div class="contact mb-1">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Contact Us</h2>
               </div>
            </div>
         </div>
         <div class="row   bg-slate-500 ">
            <div class="col-md-6">

               <form action="{{route('feedback.store')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                     <label for="phone">Phone Number</label>
                     <input type="tel" class="form-control" id="phone" name="phone_number" placeholder="Enter your phone number">
                  </div>
                  <div class="form-group">
                     <label for="message">Message</label>
                     <textarea class="form-control" id="message" rows="5" name="message" placeholder="Enter your message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
            <div class="col-md-6   contact-info  text-center mt-3">
               <h2><i class="fas fa-map-marker-alt"></i> </h2>
               <h2> Nawalpur, Nepal</h2>
               <h2> <i class="fas fa-phone"></i></h2>
               <h2> +977 9800000000</h2>
               <h2><i class="fas fa-envelope"></i> </h2>
               <h2>halka@gmail.com</h2>



            </div>
         </div>
      </div>
   </div>
   <!-- end contact -->
   <!--  footer -->
   <footer>
      @include('footer')
   </footer>
   <!-- end footer -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   @yield('content')
</body>

</html>