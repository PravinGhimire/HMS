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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .title {
           
         font-size: 3rem;
            font-weight: bold;/* background-color: #e9ecef; Blue background color */
            color: black; 
            /* White text color */
            padding: 10px 0; /* Padding for top and bottom only */
            margin: 0; /* Remove margin */
            border-radius: 5px; /* Rounded corners */
            text-align: center; /* Center the text */
        }
        .check-availability {
            /* background-color: #e9ecef; Slightly darker background for contrast */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: -1px;
            margin-bottom: 5px; /* Overlap with the title */
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
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mt-5">
                    <h2>Our Rooms</h2>
                </div>
                <div class="check-availability mt-0">
                    <form id="availabilityForm" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" id="roomId" name="room_id" class="form-control" placeholder="Room Type" required>
                            </div>
                            <div class="col-md-3">
                                <input type="date" id="checkInDate" name="check_in_date" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <input type="date" id="checkOutDate" name="check_out_date" class="form-control" required>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="alertPopup" class="alert alert-danger mt-3" style="display: none;">
                    <span id="alertMessage"></span>
                    <button type="button" class="close" onclick="closeAlertPopup()">&times;</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our_room -->
<div class="our_room">
    <div class="container">
    <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="room animate__animated animate__zoomIn">
                        <div class="room_img">
                            <figure><img src="{{ asset('images/rooms/' . $room->photopath) }}" class="img-fluid" alt="Room Image" /></figure>
                        </div>
                        <div class="bed_room text-center">
                            <h3>{{ $room->room_type }}</h3>
                            <p>Rate: Nrs. {{ $room->rate }}</p>
                            <div class="amenities mt-3 mb-2">
                                <p><i class="fas fa-wifi"></i> Free Wi-Fi &nbsp; <i class="fas fa-tv"></i> Cable TV &nbsp; <i class="fas fa-snowflake"></i> Air Conditioning</p>
                            </div>
                            <a class="book_btn btn btn-success" href="{{ route('rums', $room->id) }}">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end our_room -->

<!-- footer -->
<footer>
    @include('footer')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/GTW3pBTew1uYtJ6L3BzQxUm8aG4M1a75jdXFLQ" crossorigin="anonymous"></script>

</body>
</html>
