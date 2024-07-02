<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Site metas -->
   <title>EliteStay</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Favicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Fancybox CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Animate CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <!-- Parallax JS -->
   <script src="https://cdn.jsdelivr.net/npm/parallax-js@3.1.0/parallax.min.js"></script>
   <style>
      .parallax-window {
         min-height: 400px;
         background: transparent;
      }

      .about_img {
         animation: fadeInRight 2s;
      }

      @keyframes fadeInRight {
         from {
            opacity: 0;
            transform: translateX(50px);
         }

         to {
            opacity: 1;
            transform: translateX(0);
         }
      }

      .titlepage {
         animation: fadeInLeft 2s;
      }

      @keyframes fadeInLeft {
         from {
            opacity: 0;
            transform: translateX(-50px);
         }

         to {
            opacity: 1;
            transform: translateX(0);
         }
      }

      .btn-custom {
         background-color: #ff5f6d;
         background-image: linear-gradient(315deg, #ff5f6d 0%, #ffc371 74%);
         color: white;
         border: none;
         border-radius: 50px;
         padding: 10px 20px;
         transition: transform 0.3s;
      }

      .btn-custom:hover {
         transform: scale(1.1);
      }
   </style>
</head>

<body class="main-layout">
   <!-- Header -->
   <header>
      @include('header')
   </header>
   <!-- End Header -->

   <!-- Banner -->
   <div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2>About Us</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Banner -->

   <!-- About -->
   <div class="about">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2 class="animate__animated animate__fadeInLeft">Welcome to EliteStay!</h2>
                  <p class="margin_0">Welcome to our hotel EliteStay! Our hotel is located in a quiet and peaceful neighborhood, providing a perfect place to rest and relax after a busy day of activities. We offer a range of comfortable rooms to suit your needs, including single, double, and twin rooms, all of which are equipped with essential amenities such as air conditioning, TV, and free Wi-Fi. Our hotel also features a cozy lobby where you can enjoy a cup of coffee or tea, read a book, or connect with friends and family. Our friendly staff is available 24/7 to assist you with any questions or concerns you may have during your stay. Our hotel is located within walking distance to many popular attractions, restaurants, and shops, making it the perfect choice for travelers who want to experience the local culture and explore the city. Thank you for choosing our simple hotel as your home away from home. We look forward to hosting you and ensuring that you have a comfortable and enjoyable stay.</p>
                  <a href="#" class="btn btn-custom mt-3">Learn More</a>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img animate__animated animate__fadeInRight">
                  <figure><img src="images/about.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End About -->

   <!-- Footer -->
   <footer>
      @include('footer')
   </footer>
   <!-- End Footer -->

   <!-- Bootstrap Bundle JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- Custom JS -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      // Initialize Parallax
      document.addEventListener("DOMContentLoaded", function() {
         var scene = document.querySelector('.parallax-window');
         if (scene) {
            var parallaxInstance = new Parallax(scene);
         }
      });
   </script>
</body>

</html>
