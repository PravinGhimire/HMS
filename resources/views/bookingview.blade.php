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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .custom-table {
            width: 90%;
            /* Set your desired width here */
        }
    </style>

</head>
<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        @include('header')
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <!-- booking -->

    <h2 class="mt-14 text-4xl font-bold border-b-4 text-red-600">Booking Records</h2>

    <div class="table-responsive ml-9 justify-center">
        <table class="table custom-table table-bordered  text-dark">
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



    <!-- end our_room -->

    <!--  footer -->
    <div class="fixed-bottom">
        <footer>
            @include('footer')
        </footer>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>