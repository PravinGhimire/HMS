@include('layouts.message')

<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="icon" type="image/png" href="images/Fauget Hotel.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <table class="table table-striped table-bordered table-hover" style="background-color: transparent;">
                <thead class="thead-dark">
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Room Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $bookingCount = ($pages->currentPage() - 1) * $pages->perPage();
                    @endphp

                    @foreach($pages as $form)
                    @php
                    $bookingCount++;
                    @endphp

                    <tr>
                        <td>{{ $bookingCount }}</td>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->check_in }}</td>
                        <td>{{ $form->check_out }}</td>
                        <td>{{ $form->room->room_type }}</td>
                        <td>
                            <span class="badge {{ strtolower($form->status) === 'booked' ? 'bg-success text-white' : 'bg-dark text-white' }} p-2">
                                {{ $form->status }}
                            </span>

                        </td>
                        <td>
                            @if ($form->status === 'Booked')
                            <form action="{{ route('booking.cancel', ['id' => $form->id]) }}" method="POST">
                                @csrf
                              <button type="submit" class="btn btn-warning btn-sm" onclick="return confirmCancel()">Cancel Booking</button>

                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <div>
                    @if ($pages->previousPageUrl())
                    <a href="{{ $pages->previousPageUrl() }}" class="pagination-link">&lt; Previous &gt;</a>
                    @endif

                    <span>Page {{ $pages->currentPage() }} of {{ $pages->lastPage() }}</span>

                    @if ($pages->nextPageUrl())
                    <a href="{{ $pages->nextPageUrl() }}" class="pagination-link">&lt;Next &gt;</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <footer>
        @include('footer')
    </footer>
</body>
<script>
    function confirmCancel(id, created_at) {
        var currentTime = new Date();
        var bookingTime = new Date(created_at);
        var timeDifference = (currentTime - bookingTime) / (1000 * 60); // Calculate the time difference in minutes

        if (timeDifference <= 10) {
            alert("Sorry, you cannot cancel this booking due to time limit");
            return false;
        } 
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>