<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EliteStay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
       /* public/css/style.css */
      
.banner_main {
    position: relative;
}

.carousel-caption {
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.carousel-item img {
    filter: brightness(70%);
}

.carousel-caption h5, .carousel-caption p {
    z-index: 2;
    position: relative;
}

/* Additional styling for the check availability form */
.bg-light {
    background-color: #f8f9fa !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.rounded {
    border-radius: 0.25rem !important;
}

.shadow {
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
}

.form-label {
    font-weight: bold;
}
 /* Custom Styles */
        /* Add your custom styles here */
    </style>
</head>
<body>
    <!-- Header -->
    @include('header')

    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('footer')

    <!-- JavaScript for Smooth Scrolling -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>