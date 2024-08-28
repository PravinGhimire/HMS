@include('layouts.message')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders -SajiloStay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous">
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
                    <div class="card-header text-bold">My Orders</div>

                    <div class="card-body">
                        @if($orders->isEmpty())
                            <p>You have no orders at the moment.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="background-color: transparent;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>SN</th>
                                            <th>Food</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $orderCount = ($orders->currentPage() - 1) * $orders->perPage();
                                        @endphp

                                        @foreach($orders as $order)
                                        @php
                                        $orderCount++;
                                        @endphp

                                        <tr>
                                            <td>{{ $orderCount }}</td>
                                            <td>{{ $order->food }}</td>
                                            <td>{{ $order->quantity }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $orders->links() }}
                                </div>
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
</body>

</html>
