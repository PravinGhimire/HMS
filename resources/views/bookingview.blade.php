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

    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <style>
        th {
            background-color: #343a49;
            /* Dark background color */
            color: black;
            /* White text color */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Light background color */
        }

        .btn-warning {
            background-color: #ffc107;
            /* Yellow background color */
            color: #333;
            /* Dark text color */
        }

        .btn-warning:hover {
            background-color: #ffca2b;
            /* Lighter yellow on hover */
        }

        td,
        th {
            padding: 10px;
            /* Adjust the value as needed */
        }

        tr:hover {
            background-color: #dcdcdc;
            /* Light gray background on hover */
        }

        .table-bordered {
            border: 1px solid #ccc;
            /* Gray border */
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- body -->

<body class="main-layout">
    <header>
        @include('header')
    </header>
    <!-- booking -->
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
    <div class="d-flex justify-content-start mb-4">
        <div class="table-responsive">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

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
                    @php
                    $userBookingCount = []; // Store the booking count for each user
                    @endphp

                    @foreach($forms as $form)
                    @if ($form->user_id == auth()->user()->id)
                    @if (!isset($userBookingCount[$form->user_id]))
                    @php
                    $userBookingCount[$form->user_id] = 1;
                    @endphp
                    @else
                    @php
                    $userBookingCount[$form->user_id]++;
                    @endphp
                    @endif

                    <tr>
                        <td>{{ $userBookingCount[$form->user_id] }}</td>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->check_in }}</td>
                        <td>{{ $form->check_out }}</td>
                        <td>{{ $form->room->room_type }}</td>
                        <td>
                            @if ($form->status === 'Booked')
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
                    </tr>
                    @endif
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