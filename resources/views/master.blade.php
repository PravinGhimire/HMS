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
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">New Era</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#room">Our Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
      </ul>
        <div class=" btn-group ">
                 <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='far fa-user' style='font-size:20px' href="#"></i>
               </button>
                  <ul class="dropdown-menu dropdown-menu-end">
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
   <!-- banner -->
   <section class="banner_main" id="#">
<div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.jpg" class=" w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner4.jpg" class=" w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class=" w-100" alt="...">
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
   
   <div  class="our_room" id="room">
         <div class="container con-div">
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
                        
                        <a class="btn btn-primary btn-lg" href="room" role="button">View Room</a>

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
            <div class="col-md-4">
               <div class="gallery_img">
                  <figure><img src="images/gallery1.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
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
            </div>
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
      <div class="footer">
         <div class="container con-div">
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
               <div class="col-md-4">
             
                  <ul class="social_icon">
                  <li><a href="#"><i class="fa-brands fa-facebook" style="color: #0f60eb;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter" style="color: #0659ea;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin" style="color: #065ff9;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest" style#ec0909;"></i></a></li>
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
   <!-- <script>
   const buttons = document.querySelectorAll('.btn btn-warning');
buttons.forEach(button => {
	button.addEventListener('click', () => {
		window.location.href = "room.blade.php";
	});
});
 </script> -->
   <!-- Javascript files-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  
   @yield('content')
</body>


</html>