@include('layouts.message')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings - New Era</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="images/Fauget Hotel.png">
    <style>
        .card {
            margin-top: 25px;
            margin-bottom: 5px; /* Adjust margin-top as needed */
        }
    </style>
</head>

<body class="main-layout">
    <header>
        @include('header')
    </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bold" >My Bookings</div>

                    <div class="card-body">
                        @if($bookings->isEmpty())
                            <p>You have no bookings at the moment.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Check-in</th>
                                            <th>Check-out</th>
                                            <th>Room Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $sn = 1; @endphp
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{ $sn++ }}</td>
                                                <td>{{ $booking->check_in }}</td>
                                                <td>{{ $booking->check_out }}</td>
                                                <td>{{ $booking->room->room_type }}</td>
                                                <td>
                                                    @if ($booking->status === 'Booked')
                                                        <span class="badge bg-success text-white">Booked</span>
                                                    @elseif ($booking->status === 'Cancelled')
                                                        <span class="badge bg-dark text-white">Cancelled</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($booking->status === 'Booked')
                                                        @php
                                                            $currentTime = now();
                                                            $bookingTime = $booking->created_at;
                                                            $timeDifference = $currentTime->diffInMinutes($bookingTime);
                                                        @endphp

                                                        @if ($timeDifference <= 10)
                                                            <form action="{{ route('booking.cancel', ['id' => $booking->id]) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-warning btn-sm" onclick="return confirmCancel()">Cancel Booking</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function confirmCancel() {
            return confirm("Are you sure you want to cancel this booking?");
        }
    </script>
</body>

</html>
