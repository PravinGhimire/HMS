// resources/views/resturant.blade.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Restaurant Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .menu-title {
            font-size: 2.5rem;
            font-weight: bold;
            padding-bottom: 0.5rem;
            border-bottom: 4px solid black;
            margin-bottom: 1.5rem;
        }
        .menu-item {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .menu-item:hover {
            transform: translateY(-10px);
        }
        .menu-content {
            padding: 1rem;
            text-align: center;
        }
        .menu-content img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .menu-content h3 {
            font-size: 1.25rem;
            margin: 0.5rem 0;
        }
        .order-btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: #fff;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }
        .order-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="main-layout">
    <!-- header -->
    <header>
        @include('header')
    </header>
    <!-- end header inner -->
    
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2 class="menu-title mt-5 text-center">Our Menu</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="our_menu">
        <div class="container">
            <div class="row">
                @foreach($resturants as $resturant)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <figure><img src="{{ asset('images/resturants/' . $resturant->photopath) }}" alt="Food Image"></figure>
                            <h3>Food: {{ $resturant->food }}</h3>
                            <h3>Quantity: {{ $resturant->quantity }}</h3>
                            <h3>Rate: Nrs. {{ $resturant->rate }}</h3>
                            <a href="{{ route('order.create', $resturant->id) }}" class="btn btn-primary">
                            Order Now
                        </a>                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer>
        @include('footer')
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
