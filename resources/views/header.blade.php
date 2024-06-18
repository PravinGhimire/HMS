<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Era</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom Styles */
        /* Add your custom styles here */
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">New Era</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-nav-scroll me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#room">Our Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#resturant">Restaurant</a>
                        </li>
                    </ul>
                    <!-- User Authentication Links -->
                    @if(auth()->check())
        <a class="text-white text-sm m-1">Welcome, {{ auth()->user()->name }}</a>
        @endif
        <ul>
          @if(!auth()->check())
          <ul class="navbar-nav ms-auto">
            <li><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item">
              <span class="nav-link active">|</span>
            </li>
            <li><a class="nav-link active" href="{{ route('register') }}">Register</a></li>
          </ul>
          @else
          <div class="btn-group">
            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- Add user icon or other indication if necessary -->
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              @if(auth()->user()->role == 'admin')
              <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
              @else
              <li><a class="dropdown-item" href="{{ route('bookingview') }}">View Booking</a></li>
              @endif
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </div>
          @endif
        </ul>
                    <!-- Add your authentication links here -->
                </div>
            </div>
        </nav>
    </header>

    <!-- Add your other sections here -->

    <!-- JavaScript for Smooth Scrolling -->
    <!-- <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script> -->
</body>
</html>
