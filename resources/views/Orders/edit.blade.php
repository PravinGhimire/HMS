<!-- resources/views/orders/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Edit Order</h2>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>

    @if ($order->status == 'Completed')
    <a href="{{ route('orders.invoice', $order->id) }}" class="btn btn-secondary mt-3" target="_blank">Generate Invoice</a>
    @endif
</div>
@endsection
