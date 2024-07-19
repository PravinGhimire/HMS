@extends('layouts.app')

@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-sm w-75">
            <div class="card-header bg-primary text-white text-center">
                <h2>Restaurant Management</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Work</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Restaurant Details</td>
                            <td>
                                <a href="{{ route('resturant.details') }}" class="btn btn-outline-primary btn-sm">Visit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Order Details</td>
                            <td>
                                <a href="{{ route('orders.details') }}" class="btn btn-outline-primary btn-sm">Visit</a>
                                      </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
