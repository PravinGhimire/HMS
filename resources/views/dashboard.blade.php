@extends('layouts.app')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Users Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card custom-card bg-primary text-white shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Users</div>
                        <div class="h5 mb-0">{{$totalusers}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card custom-card bg-success text-white shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Bookings</div>
                        <div class="h5 mb-0">{{$totalbooking}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-calendar-check fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Photos Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card custom-card bg-warning text-white shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Photos</div>
                        <div class="h5 mb-0">{{$totalgallery}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-image fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rooms Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card custom-card bg-info text-white shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Rooms</div>
                        <div class="h5 mb-0">{{$totalrooms}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-bed fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row">
    <!-- Booking Overview Chart -->
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Booking Overview</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="bookingChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- User Overview Chart -->
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">User Overview</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="userChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feedback Chart -->
<!-- <div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Feedback Overview</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="feedbackChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div> -->

@push('scripts')
<script>
    // Booking Overview Chart
    var ctx = document.getElementById("bookingChart").getContext('2d');
    var bookingChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: 'Bookings',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    // User Overview Chart
    var ctx2 = document.getElementById("userChart").getContext('2d');
    var userChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: 'Users',
                data: [22, 29, 15, 30, 20, 25],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    // Feedback Chart
    // var ctx3 = document.getElementById("feedbackChart").getContext('2d');
    // var feedbackChart = new Chart(ctx3, {
    //     type: 'pie',
    //     data: {
    //         labels: ["Positive", "Neutral", "Negative"],
    //         datasets: [{
    //             label: 'Feedbacks',
    //             data: [55, 25, 20],
    //             backgroundColor: [
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(255, 99, 132, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(255, 99, 132, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // });
</script>
@endpush

@endsection
