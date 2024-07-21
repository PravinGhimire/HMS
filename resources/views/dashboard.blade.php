@extends('layouts.app')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Users Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-gradient-light text-dark shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Users</div>
                        <div class="h5 mb-0">{{$totalusers}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-gradient-light text-dark shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Bookings</div>
                        <div class="h5 mb-0">{{$totalbooking}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-calendar-check fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Photos Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-gradient-light text-dark shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Photos</div>
                        <div class="h5 mb-0">{{$totalgallery}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-image fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rooms Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-gradient-light text-dark shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-9">
                        <div class="text-uppercase mb-1">Total Rooms</div>
                        <div class="h5 mb-0">{{$totalrooms}}</div>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-bed fa-2x text-info"></i>
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
        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-light">
                <h6 class="m-0 font-weight-bold text-dark">Booking Overview</h6>
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
        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-light">
                <h6 class="m-0 font-weight-bold text-dark">User Overview</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="userChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Booking Overview Chart
    var ctx = document.getElementById("bookingChart").getContext('2d');
    var bookingChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Bookings',
                data: [10, 13, 15, 16, 12, 18, 22,24],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    grid: {
                        color: 'rgba(200, 200, 200, 0.2)'
                    },
                    ticks: {
                        color: '#495057'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(200, 200, 200, 0.2)'
                    },
                    ticks: {
                        color: '#495057'
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#495057'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            }
        }
    });

    // User Overview Chart
    var ctx2 = document.getElementById("userChart").getContext('2d');
    var userChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Users',
                data: [7, 11, 9, 10, 8, 16, 19],
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    grid: {
                        color: 'rgba(200, 200, 200, 0.2)'
                    },
                    ticks: {
                        color: '#495057'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(200, 200, 200, 0.2)'
                    },
                    ticks: {
                        color: '#495057'
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#495057'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            }
        }
    });
</script>
@endpush

@endsection
