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
@endsection