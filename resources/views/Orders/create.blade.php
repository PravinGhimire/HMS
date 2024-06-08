
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-4xl font-bold border-b-4 text-black mb-4">Order {{ $resturant->food }}</h2>
        <form action="{{ route('order.store', $resturant->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="customer_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="mb-3">
                <label for="customer_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="customer_email" name="customer_email" required>
            </div>
            <div class="mb-3">
                <label for="customer_phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
            </div>
            <div class="mb-3">
                <label for="customer_address" class="form-label">Address</label>
                <input type="text" class="form-control" id="customer_address" name="customer_address" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
@endsection
