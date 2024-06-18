<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Era - Our Rooms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom Styles */
        .our_room {
            padding: 50px 0;
            background-color: #f8f9fa;
        }
        .room {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .room:hover {
            transform: translateY(-5px);
        }
        .room_img {
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }
        .room_img img {
            width: 100%;
            border-radius: 10px 10px 0 0;
            transition: transform 0.3s ease;
        }
        .room:hover .room_img img {
            transform: scale(1.1);
        }
        .bed_room {
            padding: 20px;
            text-align: center;
        }
        .bed_room h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .bed_room p {
            font-size: 18px;
            color: #6c757d;
        }
        .book_btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .book_btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        @include('header')
    </header>

    <!-- Room Section -->
    <section class="our_room">
        <div class="container">
            <div class="row">
                @foreach($rooms as $room)
                <div class="col-md-4">
                    <div class="room">
                        <div class="room_img">
                            <img src="{{ asset('images/rooms/' . $room->photopath) }}" alt="{{ $room->room_type }}">
                        </div>
                        <div class="bed_room">
                            <h3>{{ $room->room_type }}</h3>
                            <p>Rate: Nrs. {{ $room->rate }}</p>
                            @if($room->isAvailableForBooking())
                                <a class="book_btn" href="{{ route('rums', $room->id) }}">Book Now</a>
                            @else
                                <p>Not Available</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        @include('footer')
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
