
<?php
?><!DOCTYPE html>
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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <!-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> -->
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
       integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
       crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
       <div class="container">
       <a class="navbar-brand" href="#">New Era</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="room">Our Room</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="gallery">Gallery</a>
               </li>
               </ul>
               <div class="btn-group">
                  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='far fa-user' style='font-size:20px' href="#"></i>
                  </button>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Login</a></li>
                     <li><a class="dropdown-item" href="#">View Booking Record</a></li>
                     <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                     <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                  </div>
             </div>
        </div>
   </nav>
      </header>
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
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
         
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room1.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Group Room</h3>
                        <p><h3>$120</h3></p>
                        <button class="book_btn " >Book Now</button>

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
                        <p><h3>$100</h3> </p>
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
                        <p><h3>$110</h3></p>
                       
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
                        <h3>single Room</h3>
                        <p><h3>$50 </h3></p>
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
                        <p><h3>$30</h3> </p>
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
                        <p><h3>$60</h3></p>
                        <button class="book_btn ">Book Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>  +9771234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">oo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php"> About</a></li>
                        <li class="active"><a href="room.php">Our Room</a></li>
                     
                        <li><a href="gallery.php">Gallery</a></li>
                     </ul>
                  </div>
                 <div class="col-md-4">
                     <ul class="social_icon">
                     <li><a href="#"><i class="fa-brands fa-facebook" style="color: #0f60eb;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter" style="color: #0659ea;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin" style="color: #065ff9;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest" style="color: #ec0909;"></i></a></li>
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
      <!-- Javascript files-->
      <!-- <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script> --> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- sidebar -->
      <!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script> -->
   </body>
 <script>
   const buttons = document.querySelectorAll('.book_btn');
buttons.forEach(button => {
	button.addEventListener('click', () => {
		window.location.href = "booking.php";
	});
});
 </script>
</html>
