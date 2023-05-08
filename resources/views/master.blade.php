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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Tweaks for older IEs-->
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
       integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
       crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- body -->

<body class="main-layout" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
  
   <!-- header -->
   <header>
      @include('header')
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   @foreach($sliders as $slider)
   <section class="banner_main" id="#">
   
<div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">

  <div class="carousel-indicators">
 
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"  ></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" ></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" ></button>
  </div>
 
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <img src="{{asset('images/slider/'.$slider->photopath)}}" class=" w-100" alt="">
    </div>
  
     <!-- <div class="carousel-item">
      <img src="{{asset('images/slider/'.$slider->photopath)}}" class=" w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slider/'.$slider->photopath)}}" class=" w-100" alt="...">
    </div>  -->
    
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

 
   </section>
   @endforeach
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
   
   <div  class="our_room" id="room">
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
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('images/rooms/'.$room->photopath)}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>{{$room->room_type}}</h3>
                        <p><h4>${{$room->rate}}</h4></p>
                        <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                     </div>
                  </div>
               </div>
               @endforeach
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Deluxe Room</h3>
                        <h4>$100 </h4>
                        <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img"> 
                        <figure><img src="images/room3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Superior Room</h3>
                        <h4>$110</h4>                      
                        <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>                       
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room4.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Single Room</h3>
                        <h4>$50 </h4>
                        <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room5.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Suite Room</h3>
                        <h4>$30 </h4>
                        <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room6.jpg" alt="#"/></figure>
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
      <div class="container con-div">
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
                     <figure><img src="{{asset('images/gallery/'.$gallery->photopath)}} "alt="#"/></figure>
                  </div>
               </div>
               @endforeach
            <!-- <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery2.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery3.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery4.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery5.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery6.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery7.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery8.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery1.jpg" alt="#" /></figure>
               </div>
            </div> -->
         </div>
      </div>
   </div>
   <!-- end gallery -->
   
   <!--  contact -->
   <div class="contact" >
      <div class="container con-div">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Contact Us</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Send</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="map_main">
                  
                     
         <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=nepal&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
                       
                  
               </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  
   @yield('content')
</body>


</html>