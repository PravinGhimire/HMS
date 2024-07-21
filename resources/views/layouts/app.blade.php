<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EliteStay</title>
    <link rel="icon" type="image/png" href="images/Fauget Hotel.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('vendorr/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('csss/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('csss/stylee.css') }}">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @if(auth()->user()->role == 'admin')

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-light sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-hotel" style="color: #00040a;"></i>
                </div>
                <div class="sidebar-brand-text mx-2 text-dark">EliteStay</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/dashboard">
                    <i class="fas fa-tachometer-alt"style="color: #00040a;"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Restaurant Management -->
            <li class="nav-item active">
                <a class="nav-link text-dark" href="{{ route('resturant.index') }}">
                    <i class="fas fa-hamburger"style="color: #00040a;"></i>
                    <span>Restaurants</span>
                </a>
            </li>

            <!-- Other Menu Items -->
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/rooms">
                    <i class="fas fa-bed"style="color: #00040a;"></i>
                    <span>Rooms</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/roomdetails">
                    <i class="fas fa-box"style="color: #00040a;"></i>
                    <span>Room Details</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/gallery">
                    <i class="fas fa-images"style="color: #00040a;"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/user">
                    <i class="fas fa-users"style="color: #00040a;"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/userbook">
                    <i class="fas fa-clipboard"style="color: #00040a;"></i>
                    <span>Bookings</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/slider">
                <i class="fas fa-sliders-h" style="color: #00040a;"></i>                    <span>Sliders</span>
                </a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="/feedback">
                    <i class="fas fa-comments"></i>
                    <span>Feedbacks</span>
                </a>
            </li> -->

            <!-- Logout -->
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/logout">
                    <i class="fas fa-sign-out-alt"style="color: #00040a;"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <span class="nav-link active toggle">
                        <div><span class="mr-1 d-none d-lg-inline text-dark small"> <!-- Changed text color to white -->
                                Welcome, Admin
                            </span></div>
                    </span>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">5+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Notification
                        </h6>
                        @foreach($forms->take(5) as $form)
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <!-- Your notification content here -->
                            <div class="mr-3">
                                @if ($form->status === 'Booked')
                                <i class="fas fa-check-circle fa-2x text-success"></i>
                                @elseif ($form->status === 'Cancelled')
                                <i class="fas fa-times-circle fa-2x text-danger"></i>
                                @endif
                            </div>
                            <div>
                                <span class="font-weight-bold">
                                    <p>
                                        @if ($form->status === 'Booked')
                                        {{ $form->name }} has booked {{ $form->room->room_type }}
                                        @elseif ($form->status === 'Cancelled')
                                        {{ $form->name }} has cancelled booking for {{ $form->room->room_type }}
                                        @endif
                                    </p>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500" href="{{route('booking.show')}}">Show all records</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active toggle" href="/">
                        <span class="d-lg-inline text-dark small mr-2">View Site</span> <!-- Changed text color to white -->
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->




                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('vendorr/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('scripts')
</body>

</html>
