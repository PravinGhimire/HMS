@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Customer Orders</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Food</th>
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Quantity</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->food }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->customer_phone }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- <-- Pagination Links  -->
         <div class="d-flex justify-content-center mt-4">
            {{ $orders->links() }}
        </div>
    </div>
@endsection 