@include('layouts.message')

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <!-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> -->
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <!-- Tweaks for older IEs-->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<!-- body -->

<body class="main-layout">
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container ">
                <a class="navbar-brand" href="/">New Era</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-nav-scroll me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/room">Our Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/gallerys">Gallery</a>
                        </li>
                    </ul>

                    @if(auth()->check())
                    <a class="text-white text-sm m-1 ">Welcome,{{auth()->user()->name}}</a>
                    @endif
                    <ul>
                        @if(!auth()->check())
                        <ul class="navbar-nav ms-auto">
                            <li><a class="nav-link active" href="{{route('login')}}">Login</a></li>
                            <li class="nav-item">
                                <span class="nav-link active">|</span>
                            </li>
                            <li><a class="nav-link active" href="{{route('register')}}">Register</a></li>
                        </ul>
                        @else

                        <div class="btn-group ">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @if(auth()->user()->role=='admin')
                                <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
                                @else
                                <!-- <li><a class="dropdown-item" href="{{route('bookingview')}}">View Booking</a></li> -->
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                @endif
                                <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </div>


                        @endif
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <!-- booking -->

    <!-- <h2 class="mt-14 text-4xl font-bold border-b-4 text-red-600">Booking Records</h2> -->
    <div class="back_ree">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h1>Booking Records</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-start">
        <div class="table-responsive">
            <table class="table stripped-table table-bordered   text-dark">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Check_in</th>
                        <th>Check_out</th>
                        <th>Room </th>
                        <th>Status</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                    <tr>
                    <tr>

                        @if ($form->user_id == auth()->user()->id)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$form->name}}</td>
                        <td>{{$form->email}}</td>
                        <td>{{$form->check_in}}</td>
                        <td>{{$form->check_out}}</td>
                        <td>{{$form->room->room_type}}</td>
                        <td> @if ($form->status === 'Booked')
                            <span class="badge bg-primary text-white p-2">Booked</span>
                            @elseif ($form->status === 'Cancelled')
                            <span class="badge bg-dark text-white p-2">Cancelled</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('booking.cancel', ['id' => $form->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning">Cancel Booking</button>
                            </form>

                        </td>
                        @endif
                    </tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- end our_room -->

    <!--  footer -->

    <footer>
        @include('footer')
    </footer>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>