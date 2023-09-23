@extends('layouts.app')

@section('content')

    <h2 class="text-4xl font-bold border-b-4 text-black">User Bookings</h2>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Booking Count</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $sn = 1;
            @endphp
            @foreach($users as $user)
            <tr>
                <td>{{ $sn++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->bookings_count }}</td>
                <td>
                    <a href="{{ route('booking.show', ['id' => $user->id]) }}" class="text-red-600 ">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection