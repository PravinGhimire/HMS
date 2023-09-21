@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-8">
    <div class="bg-white p-4 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4 text-center text-blue-500">Invoice</h2>

        <!-- Display Booking Information in a Table -->
        <table class="table-auto w-3/4 mx-auto">
            <tbody>
                <tr>
                    <td class="font-semibold text-gray-700">Name:</td>
                    <td class="text-gray-800">{{ $booking->name }}</td>
                </tr>
                <tr>
                    <td class="font-semibold text-gray-700">Room:</td>
                    <td class="text-gray-800">{{ $booking->room->room_type }}</td>
                </tr>
                <tr>
                    <td class="font-semibold text-gray-700">Rate:</td>
                    <td class="text-gray-800">${{ number_format($booking->room->rate, 2) }}</td>
                </tr>
                @if ($booking->payment_status !== 'Received')
                <tr>
                    <td class="font-semibold text-gray-700">Extra Charge:</td>
                    <td>
                        <input type="text" class="w-1/2 p-2 rounded-lg mt-2 border border-gray-300 focus:outline-none focus:border-blue-500" id="extra_service_charge" name="extra_service_charge" value="{{ $booking->extra_service_charge }}" oninput="updateTotalAmount()">
                    </td>
                </tr>
                @endif
                <tr>
                    <td class="font-semibold text-gray-700">Total Amount:</td>
                    <td class="text-xl text-gray-800" id="total_amount">${{ number_format($booking->room->rate + $booking->extra_service_charge, 2) }}</td>
                </tr>
                <tr>
                    <td class="font-semibold text-gray-700">Payment Status:</td>
                    <td class="text-gray-800">{{ $booking->payment_status }}</td>
                </tr>
            </tbody>
        </table>

        @if ($booking->payment_status === 'Received')
        <div class="mt-4 text-center">
            <a href="{{ route('booking.index') }}" class="btn btn-danger text-white rounded-lg px-4 py-2">Exit</a>
        </div>
        @else
        <form action="{{ route('booking.update', $booking->id) }}" method="POST">
            @csrf
            <!-- Add/Edit Payment Status -->
            <div class="mb-4 flex justify-center items-center">
                <label for="payment_status" class="block font-semibold text-gray-700 mr-2">Payment Status:</label>
                <select class="w-1/2 p-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500" id="payment_status" name="payment_status">
                    <option value="Pending" {{ $booking->payment_status === 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Received" {{ $booking->payment_status === 'Received' ? 'selected' : '' }}>Received</option>
                </select>
            </div>

            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary rounded-lg px-4 py-2">Update</button>
                <a href="{{ route('booking.show') }}" class="btn btn-danger text-white rounded-lg px-4 py-2 mx-2">Exit</a>
            </div>
        </form>
        @endif
    </div>
</div>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
    }
</style>

<script>
    function updateTotalAmount() {
        const rate = parseFloat("{{ $booking->room->rate }}");
        const extraServiceCharge = parseFloat(document.getElementById("extra_service_charge").value);
        const totalAmount = rate + extraServiceCharge;
        document.getElementById("total_amount").textContent = "$" + totalAmount.toFixed(2);
    }
</script>
@endsection