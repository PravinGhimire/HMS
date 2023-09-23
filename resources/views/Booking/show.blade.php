@extends('layouts.app')

@section('content')
@include('layouts.message')

<h2 class="text-4xl font-bold border-b-4 text-black">Booking Records</h2>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Check_in</th>
            <th>Check_out</th>
            <th>Room</th>
            <th>Payment Status</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @php
        $currentNumber = $forms->firstItem(); // Get the starting number from the paginator
        @endphp
        @foreach($forms as $form)
        <tr>
            <td>{{ $currentNumber }}</td>
            <td>{{ $form->name }}</td>
            <td>{{ $form->email }}</td>
            <td>{{ $form->check_in }}</td>
            <td>{{ $form->check_out }}</td>
            <td>{{ $form->room->room_type }}</td>
            <td>
                @if ($form->payment_status === 'Pending')
                <span class="p-2 badge bg-warning text-white">{{ $form->payment_status }}</span>
                @elseif ($form->payment_status === 'Received')
                <span class="p-2 badge bg-success text-white">{{ $form->payment_status }}</span>
                @endif
            </td>
            <td>
                @if ($form->status === 'Booked')
                <span class="p-2 badge bg-success text-white">Booked</span>
                @elseif ($form->status === 'Cancelled')
                <span class="p-2 badge bg-dark text-white">Cancelled</span>
                @endif
            </td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('booking.edit', $form->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a onclick="showDelete('{{ $form->id }}')" class="btn btn-danger cursor-pointer"><i class="fas fa-trash"></i></a>
                </div>
            </td>
        </tr>
        @php
        $currentNumber++; // Increment the current number
        @endphp
        @endforeach
    </tbody>
</table>
<!-- Pagination Links -->
<div class="mt-4">
    {{ $forms->links() }}
</div>
<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>
            <form action="{{ route('booking.delete') }}" method="POST">
                @csrf
                <input type="hidden" id="dataid" name="dataid" value="">
                <div class="flex mt-10 justify-center">
                    <input type="submit" value="Confirm? Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                    <a onclick="hideDelete()" class="btn btn-danger text-white rounded-lg px-4 py-2 mx-2">Exit</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showDelete(id) {
        $('#deletebox').removeClass('hidden');
        $('#dataid').val(id);
    }

    function hideDelete() {
        $('#deletebox').addClass('hidden');
    }
</script>
@endsection
