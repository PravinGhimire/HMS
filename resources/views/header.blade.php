<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SajiloStay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{asset('images/lo.png')}}" type="image/gif" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            color: #333;
        }
        .navbar {
            background: #343a40;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            display: inline;
            height: 30px; /* Adjust the height as needed */
        }
        .navbar-nav .nav-link {
            color: #fff;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #17a2b8;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' linecap='round' linejoin='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        .dropdown-menu-end {
            right: 0;
            left: auto;
        }
        .nav-item .nav-link.active {
            color: #17a2b8;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/loo.png') }}" alt="SajiloStay Logo" style="background: none;"> <!-- Ensure the background is transparent -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/room">Our Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallerys">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/resturant">Restaurant</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if(auth()->check())
                            <li class="nav-item">
                                <a class="nav-link">Welcome, {{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user-circle"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->role == 'admin')
                                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('booking.index') }}">My Bookings</a></li>
                                    <li><a class="dropdown-item" href="{{ route('orders.index') }}">My Orders</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li> -->
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Add your other sections here -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
