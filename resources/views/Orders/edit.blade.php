@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mx-auto my-4" style="max-width: 600px;">
        <div class="card-header">
            <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Edit Order</h2>
        </div>
        <div class="card-body">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="food" class="form-label">Food:</label>
                    <input type="text" id="food" name="food" value="{{ $order->food }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name:</label>
                    <input type="text" id="customer_name" name="customer_name" value="{{ $order->customer_name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="customer_email" class="form-label">Customer Email:</label>
                    <input type="email" id="customer_email" name="customer_email" value="{{ $order->customer_email }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="customer_phone" class="form-label">Customer Phone:</label>
                    <input type="text" id="customer_phone" name="customer_phone" value="{{ $order->customer_phone }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="{{ $order->quantity }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                @if ($order->status == 'Pending')
                <button type="submit" class="btn btn-primary">Update Order</button>
                @endif
            </form>
        </div>
        <div class="card-footer">
            @if ($order->status == 'Completed')
            <a href="{{ route('orders.details') }}" class="btn btn-secondary">Exit</a>
            <a href="{{ route('orders.invoice', $order->id) }}" class="btn btn-secondary" target="_blank">Generate Invoice</a>
            @endif
        </div>
    </div>
</div>
@endsection
