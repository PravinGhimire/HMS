<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title -->
    <title>SajiloStay</title>
    
    <!-- Meta Description -->
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name">
    
    <!-- Bootstrap CSS (Updated) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    
    <!-- Custom Scrollbar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
    <!-- Font Awesome (Updated) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>

<body class="main-layout inner-page">

    <!-- Header -->
    <header>
        @include('header')
    </header>

    <!-- Hero Section -->
    <section class="hero bg-dark text-white d-flex align-items-center" style="background-image: url('images/hero.jpg'); background-size: cover; height: 400px;">
        <div class="container text-center">
            <h1 class="display-3">Welcome to SajiloStay</h1>
            <p class="lead">Experience the best services and gallery.</p>
            <a href="#gallery" class="btn btn-primary btn-lg">Explore Gallery</a>
        </div>
    </section>

    <!-- Page Title Section -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="display-4">Gallery</h2>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($galleries as $gallery)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img card h-100 border-0 shadow-sm">
                        <a href="{{ asset('images/gallery/'.$gallery->photopath) }}" data-lightbox="gallery" data-title="Gallery Image">
                            <img src="{{ asset('images/gallery/'.$gallery->photopath) }}" class="card-img-top" alt="Gallery Image">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Advanced Footer -->
   <footer>@include('footer')</footer>
    

    <!-- Bootstrap JS (Updated) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <!-- Custom Scrollbar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Smooth Scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>
