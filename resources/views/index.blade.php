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
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>
<!-- body -->

<body class="main-layout">
  
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
       <div class="container">
            <div class="row">              
               <div class=" navbar-expand-lg navbar-light bg-light">
                  <nav class="navigation navbar navbar-expand-md navbar-dark">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04" >
                     <ul class="navbar-nav ml-auto">
                              <li class="nav-item active ">
                                 <a class="nav-link" href="/"><i class="fa fa-fw fa-home"></i>Home</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="about"><i class="fa fa-users"></i>About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="room"><i class="fa fa-bed" aria-hidden="true"></i>Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a>
                              </li>
                            
                           </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
     
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner4.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner2.jpg" alt="fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="booking_ocline">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="book_room">
                     <h1>Book Room</h1>
                     <form class="book_now">
                        <div class="row">
                           <div class="col-md-12">
                              <span>Arrival</span>
                              
                             <input type="date" class="online_book">
                           </div>
                           <div class="col-md-12">
                              <span>Departure</span>
                              
                              <input type="date" class="online_book">
                           </div>
                           <div class="col-md-12">
                              <button class="book_btn">Book Now</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
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
   
   <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Rooms </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room1.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Group Room</h3>
                        <h4>$120</h4>
                        <button class="book_btn ">Book Now</button>

                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Deluxe Room</h3>
                        <h4>$100 </h4>
                        <button class="book_btn ">Book Now</button>
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
                       
                        <button class="book_btn ">Book Now</button>
                       
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
                        <button class="book_btn ">Book Now</button>
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
                        <button class="book_btn ">Book Now</button>
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
                        <button class="book_btn ">Book Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- end our_room -->
   <!-- gallery -->
   <div class="gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>gallery</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery1.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery2.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery3.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery4.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery5.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery6.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery7.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery8.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end gallery -->
   
   <!--  contact -->
   <div class="contact">
      <div class="container">
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
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class=" col-md-4">
                  <h3>Contact US</h3>
                  <ul class="conta">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                     <li><i class="fa fa-mobile" aria-hidden="true"></i> +977 1234569540</li>
                     <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                  </ul>
               </div>
               <div class="col-md-4">
                  <h3>Menu Link</h3>
                  <ul class="link_menu">
                     <li class="active"><a href="#">Home</a></li>
                     <li><a href="about.php"> About</a></li>
                     <li><a href="room.php">Our Room</a></li>
                     <li><a href="gallery.php">Gallery</a></li>
                   
                
                  </ul>
               </div>
               <div class="col-md">
             
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
               <div class="col-md-10 offset-md-1">
                     <p class="p">
                        © 2019 All Rights Reserved. Design by PG Groups                        
                     </p>
                  </div>   
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <script>
   const buttons = document.querySelectorAll('.book_btn');
buttons.forEach(button => {
	button.addEventListener('click', () => {
		window.location.href = "booking.blade.php";
	});
});
 </script>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
 
</body>


</html>